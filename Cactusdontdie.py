!/usr/bin/python
# -*- coding: UTF-8 -*-
import RPi.GPIO as GPIO
import time
import mysql.connector
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

mydb = mysql.connector.connect(
  host="localhost",
  user="",
  passwd="",
  database=""
)

mycursor=mydb.cursor()

fromaddr = "cactusdontdie@gmail.com"
toaddr = "dorothyxqho@gmail.com"
msg = MIMEMultipart()
msg['From']=fromaddr
msg['To'] = toaddr
msg['Subject']="Plant Watered"
body = "Hi buddy, your plant had watered =D"
msg.attach(MIMEText(body,'plain'))

pin = 20
channel = 21 #管脚40
GPIO.setmode(GPIO.BCM)
GPIO.setup(channel, GPIO.IN)
GPIO.setup(pin, GPIO.OUT)

if GPIO.input(channel) == GPIO.LOW:
    print ("土壤检测结果：潮湿")
    soilStatus=0 #0=wet; 1=dry
    GPIO.output(pin,GPIO.LOW)
else:
    print ( "土壤检测结果：干燥")
    soilStatus=1
    GPIO.output(pin,GPIO.HIGH)
    HowLong=0.15
    time.sleep(HowLong)
    waterAction=0 #0=auto
    waterSql = "insert into Water (WID, Action, HowLong) values (%s, %s, %s)"
    waterVal = ("NULL", waterAction, HowLong)
    mycursor.execute(waterSql, waterVal)
    mydb.commit()
    print(mycursor.rowcount, "record inserted.(Water)")
    GPIO.output(pin,GPIO.LOW)
    server = smtplib.SMTP('smtp.gmail.com',587)
    server.starttls()
    server.login(fromaddr,"")
    text = msg.as_string()
    server.sendmail(fromaddr,toaddr,text)
    server.quit()
soilSql = "insert into Soil (SID, Status) values (%s, %s)"
soilVal = ("NULL", soilStatus)
mycursor.execute(soilSql, soilVal)
mydb.commit()

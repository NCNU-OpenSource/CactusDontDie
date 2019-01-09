# Cactus Don't Die / 仙人掌不要死

多數仙人掌科植物都耐旱，但也有例外...  
連仙人掌也可以養死的我們，目標是一個自動澆花系統，讓仙人掌獲得新生。

Group 9

Groupmates: 
+ [何曉倩](https://github.com/Dorothy0405)
+ [王子佳](https://github.com/ivan922114)
+ [鄭芷君](https://github.com/paperelmo)

1) [系統架構](#系統架構)
2) [設備](#設備)
3) [功能](#功能)
4) [分工](#%E5%88%86%E5%B7%A5)
5) [參考資料]()

## 系統架構
+ python
+ mysql
+ php

## 設備
| 名稱 | 數量 | 來源 |
| --- | --- | --- |
| Raspberry Pi | 1 | MOLi |
| 繼電器 | 1 | MOLi |
| 沉水馬達 | 1 | 新購/MOLi |
| Soil Moisture Sensor | 1 | 新購/MOLi |
| 水管 | 1 | 新購/MOLi |
## 功能
1) 偵側泥土的水份是否足夠
    + 使用Soil Moisture Sensor
    + 根據盆栽的大小和植物的需要而調節適合的泥土濕度標準
    + 每 判斷一次
2) 自動澆水
    + 使用繼電器和沉水馬逹
    + 當判斷為水份不足的時候，系統會利用繼電器控制沉水馬逹的開關
    + 根據盆栽的大小和植物的需要而調節適合的澆水長度
        + 百合花︰
        + 仙人掌︰
3) 把泥土的狀況和澆水的記錄存至database
4) 網頁實時看數據 
5) 水槽缺水時發Email提醒
    + Sending Emails With Python

## 電路圖
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/IoTplant%20.png "電路圖")
## 分工
+ [何曉倩](https://github.com/Dorothy0405) 資工四 104321060

+ [王子佳](https://github.com/ivan922114) 資工四 104321062

+ [鄭芷君](https://github.com/paperelmo) 資工四 104321070

## 參考資料
+ [php cant show up on apache2 solution](https://askubuntu.com/questions/451708/php-script-not-executing-on-apache-server)
+ [mysql set all privileges for the user ROOT](https://www.youtube.com/watch?v=kQ0HoLva9Yc)
+ [install python lib mysqldb](https://stackoverflow.com/questions/454854/no-module-named-mysqldb/36183193)
+ [mysql change timezone](https://www.brilliantcode.net/473/mysql-set-change-timezone/)

# Cactus Don't Die / 仙人掌不要死

多數仙人掌科植物都耐旱，如果兩年時間沒有澆水，再耐旱的植物也會...  
所以連仙人掌也可以養死的我們，目標是一個自動澆花系統，讓仙人掌獲得新生。

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
    + 每6小時判斷一次
2) 自動澆水
    + 使用繼電器和沉水馬逹
    + 當判斷為水份不足的時候，系統會利用繼電器控制沉水馬逹的開關
    + 根據盆栽的大小和植物的需要而調節適合的澆水長度
        + 百合花︰0.5s
        + 仙人掌︰0.1s
3) 把泥土的狀況和澆水的記錄存至database
4) 網頁實時看數據 
5) 水槽缺水時發Email提醒
    + Sending Emails With Python

## 電路圖
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/IoTplant%20.png "電路圖")

## 成品圖
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/photo_2019-01-11_17-34-35.jpg "成品圖")

## 網頁截圖
每次先檢查需不需要澆水
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/web1.jpg "判斷是否需要澆水")
需要澆水的時候，澆水後會把紀錄記錄在資料庫
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/web2.jpg "已澆水記錄")
## EMAIL通知
每次澆水後都會email通知
![](https://github.com/paperelmo/1071_LSA_group9_CactusDontDie/blob/master/email通知.jpg "自動email通知")
## 分工
+ [何曉倩](https://github.com/Dorothy0405) 資工四 104321060 主程式碼, 主題發想, 資料搜集, raspberry pi環境設定, 材料採購

+ [王子佳](https://github.com/ivan922114) 資工四 104321062 主題發想, 硬體, 資料搜集, 簡報內容, 電路圖

+ [鄭芷君](https://github.com/paperelmo) 資工四 104321070 主網頁, 主題發想, SQL, 資料搜集, 仙人掌主人

## 參考資料
+ [php cant show up on apache2 solution](https://askubuntu.com/questions/451708/php-script-not-executing-on-apache-server)
+ [mysql set all privileges for the user ROOT](https://www.youtube.com/watch?v=kQ0HoLva9Yc)
+ [install python lib mysqldb](https://stackoverflow.com/questions/454854/no-module-named-mysqldb/36183193)
+ [mysql change timezone](https://www.brilliantcode.net/473/mysql-set-change-timezone/)

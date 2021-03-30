# Laravel 8 提供介面處理請求和回應的 SOAP（簡易物件通訊協定）用戶端

引入 ricorocks-digital-agency 的 soap 套件來擴增提供介面處理請求和回應的 SOAP 用戶端，SOAP 是一種以 XML 為基礎的通訊協定，其作用是編譯網路服務所需的要求或回應後，再將編譯後的訊息送出到網路，簡單來說就是應用程式和用戶之間傳輸資料的一種機制。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 確認安裝或啟用 SOAP 模組。
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/soap/client/add` 來進行加法計算。

----

## 畫面截圖
![](https://i.imgur.com/L0GgSjB.png)
> 以 XML 格式互相交換彼此的資料，使其與程式語言、平台和硬體無關
# Getting Started with Laravel Livewire

Code to accompany [our tutorial on Livewire](https://www.sitepoint.com/laravel-livewire-getting-started/), a full-stack framework for Laravel that allows us to build dynamic interfaces without writing a whole lot of JavaScript. 

In this tutorial we create a live CRUD app, where Livewire handles all the AJAX requests required to update the UI. This includes filtering the results via the search field, sorting via the column header, and a simple pagination (previous and next). Creating and editing users makes use of Bootstrap Modals.

## Requirements

* [PHP](https://www.php.net/manual/en/install.php)
* [MySQL](https://dev.mysql.com/doc/refman/8.0/en/installing.html)
* [NGINX](https://docs.nginx.com/nginx/admin-guide/installing-nginx/installing-nginx-open-source/)
* [Composer](https://getcomposer.org/download/)
* [Node and npm](https://www.sitepoint.com/quick-tip-multiple-versions-node-nvm/)

## Installation Steps (if applicable)

1. Clone repo
2. cd livecrud
3. Create a `livecrud` database
4. Rename `.env.example` to `.env` and enter the correct details [as explained in the article](https://www.sitepoint.com/laravel-livewire-getting-started/#settingupthedatabase)
5. Generate application key: `php artisan key:generate`
6. Update composer dependencies: `composer install`
7. Run `php artisan migrate --seed`
8. Run `npm install @fortawesome/fontawesome-free`
9. Run `npm install && npm run dev`
10. Run `php artisan serve`
11. Access the app in your browser at <http://127.0.0.1:8000/>

## License

SitePoint's code archives and code examples are licensed under the MIT license.

Copyright © 2021 SitePoint

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


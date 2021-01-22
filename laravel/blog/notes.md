LARAVEL:
    + file env: là biến môi trường| + Cách gọi một biến môi trường: 

    + Cấu trúc thư mục: Là mô hình MVC| + model: Là một thực thể, vật thể| tương tác đến database 
                                        + View: Dùng để hiện thị ra
                                        + controller: là một sự kiện, hành động của model
----------------------------------------------------------------------------------------------------
+ Controller:
            + Khái niệm: 
            + Vị trí: App/http/controller
            + Câu lệnh: php artisan make:controller NameController 
            + Công việc: Dùng để thể hiện 1 hành động, một sự kiện của moddel.
            --------------------------------------------------------------------------------------
            + Resource: 
                        + Tạo controller Resource: php artisan make:controller NameController --resource (tạo ra controller có đầy đủ các function).
                        + Route sẽ chỉ trỏ 1 đường dẫn duy nhất mà k mất time tạo nhiều phương thức như get(), put()... Route::resource('/duongdan', Namecontroller)

+ Router:   
            + Khái niệm: - Được hiểu nôm na như URL. Nó có 2 thành phần chính. $url & $action.
            + Vị trí: routes/web.php
            + Câu lệnh: -C1: Route::('/', function(){......});
                        -C2: Route::('/', 'controller@index');
                        -C3: Route::get('/welcome', ['as' => 'name', 'uses' => 'WelcomeController@index']);
            + Công việc: Tạo đường dẫn cho người dùng có thể trỏ đến controller.
            -----------------------------------------------------------------------------------------------
            + Phương thức:
                        + get()
                        + post()
+ Migration: 
            + Khái niệm: Giống như control database. 
            + Vị trí: App/database/migrations
            + Câu lệnh: php artisan make:migration NameMigration.
            + Câu lệnh: php artisan migrate:rollback. => xóa migration trong db
            + Công việc: Dùng để tương tác với database, Quản lí, chỉnh sữa database 1 cách dễ dàng hơn.
+ Model:
            + Khái niệm: 
            + Vị trí: - Mặc định nó nằm trong thư mục (APP), ngang hàng vs Console,Http....
                      - Để gọn gàng hơn: chúng ta sẽ tạo một thư mục models và bỏ các model vào đó.
            + Câu lệnh: - Thông thường: php artisan make:model NameModel
                        - Vừa tạo mới model, vừa tạo mới migration: php artisan make:model NameModel -m
            + Công việc: - Model sẽ liên kết vs Migration.
                         - ORM(object related mapping): + code: => lưu xuống db.
                                                        + database: => đọc lên thành object trên code.
            ----------------------------------------------------------------------------------------
            + Fillable: Chỉ định các field sẽ được lưu xuống db.
+ Các hàm quan trọng trong laravel: 
            + Compact: nó nằm trong Controller. Dùng để đặt tên cho view rồi trả về file blade.php
                        compact($article)[
                            'article' => 'article'
                        ]
            + with(): cũng tương tự như compact | ->with('article',$article)
            + link(): tạo ra menu phân trang (1,2,3,4,5)
            -----------------------------------------------------------------------------------------
+ Seeder: 
            + Khái niệm: dữ liệu mẫu. 
            + Vị trí: database/seeds
            + Câu lệnh tạo mới file seeder: php artisan make:seeder ArticleTableSeeder
            + Câu lệnh: composer dump-autoload => nó sẽ load tất cả các thư viện nằm trong vendor tạo ra một cái mới. 
            + Câu lệnh: php artisan db:seed => tạo dữ liệu mẫu dưới db.
            + Công việc: Tạo ra nhiều dữ liệu mẫu mà k cần phải nhập thủ công vào db
+ Requests: 
            + Khái niệm: Nó tương tự như Validation|  là những luật hay yêu cầu của dữ liệu bắt buộc phải tuân theo.
            + Vị trí: App/Http/Requests
            + Câu lệnh: php artisan make:request NameRequest
            + Phân quyền: 

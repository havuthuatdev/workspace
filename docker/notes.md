DOCKER: 
        + Cài đặt: 
                - download: https://www.docker.com/products/docker-desktop
                - kiểm tra version: docker -v
                - kiểm tra docker chạy được hay không: docker run hello-world
                - kiểm tra container: docker ps

        - Dùng để đóng gọi các môi trường vào một container. Để có thể chạy trên nhiều máy khác nhau: windown, lunix, MAC... mà k cần cài đặt các môi trường cho nó một lần nữa.

        + container: Là môi trường cách ly, k có sự tương tác qua lại khác nhau. Đóng gói tất cả các môi trường cần thiết cho một project. 

        + Images: 
                - là phần mềm được đóng gói được quản lý trong docker: php, mysql, ubuntu, ... 
                - Chỉ có thể đọc, không thể sửa đổi.
                - Kiểm tra image: docker images
                - dowload images: docker pull name_image:phienban| vd: docker pull ubuntu:1.0.2
                - delete image: c1:docker image rm name_image:phienban| c2: docker image rm ID_image

        + Dockerfile: 
                - cú pháp create: echo>>file.blah
                - Dockerfile: 
                                + Mục đích: để thiết lập quá trình cài đặt và chạy các môi trường để tạo thành container.
                                + FROM: NameImage:version | vd: laravel:8
                                + WORKDIR: Là cái nơi bạn muốn lưu những file cần thiết vào đây | vd: usr/src/app
                                + COPPY: Là coppy những thứ quan trong vào WORKDIR | vd: pakage*.json ./
                                + RUN: dùng để chạy những cài đặt môi trường, dùng thư viện nào thì chạy theo câu lệnh thư viện đó. | vd: npm install 
                                + COPPY: coppy toàn bộ project vào thư mục WORKDIR. | vd: . .
                                + EXPOSE: sử dụng port trên docker chứ không phải ở local. | vd: 8080
                                + CMD: thể hiện mình chạy cái gì và ở đâu | vd: ["node", index.js]
                - Dockerignore:
                                + Cú pháp create: echo>>dockerignore.blah
                                + Mục đích: Để lưu những thư mục nặng như src của các thư viện laravel hay các thư mục của thư viện khác. Nhằm mục đích để chạy nhanh hơn.
                                + Thành phần trong dockerignore: name thư mục| vd: src
                - Build image docker: + Khi mà đã hoàn thành xong docker file thì mình sẽ bild nó lên.
                                      + Cú pháp: docker build -t nameImage:version . | vd: my-laravel-app:8.0 .
                - Chạy docker image: + Cú pháp: docker run -p PortLocal:PortDocker nameImage:version | vd: docker run -p 5001:8080 my-laravel-app:8.0
                - Dừng container: + Cú pháp: docker container stop containerID | vd: docker container stop 0145s324f

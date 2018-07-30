--Làm việc với PDO--
1. Phải sử dụng các phương thức với các đối tượng
a. Phương thức prepare($query);
b. Phương thức bindValue($para, $value);
c. Phương thức excute(); Cho phép chạy câu lệnh trong prepare
d. Lấy được dữ liệu ra có : fetchAll() trả về 1 mãng các giá trị, nếu fetch() chỉ trả về 1 giá trị
e. Tương tác xong đóng phiên làm việc dùng closeCursor()
f. rowCount() đếm số dòng đã thực thi


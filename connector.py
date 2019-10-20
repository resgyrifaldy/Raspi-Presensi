import mysql.connector
mysql=mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    database="iot_rfid"
)

mycursor = mysql.cursor()
sql="insert into data(nama,user_id) values(%s,%s)"
val=("Bambanx pake x","17830090")

mycursor.execute(sql, val)

mysql.commit();

print("Data Berhasil Ditambahkan");

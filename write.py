import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()

print ("Hai Northboy36")
print ("tekan ctrl + c untuk berhenti")

try :
	text=input('Masukkan Data Baru :')
	print("Sekarang Tempelkan Untuk Menulis Data....")
	reader.write(text)
	print("Data Berhasil Ditulis")
finally:
	GPIO.cleanup() 


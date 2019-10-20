import RPi.GPIO as GPIO
import time
from mfrc522 import SimpleMFRC522

reader = SimpleMFRC522()

print ("Haii Northboy36")
print ("Tekan ctrl+c untuk berhenti")
print ("===========================")


while True:
	try:
		id, text = reader.read()
		print (id)
		print (text)
		time.sleep(10)
	

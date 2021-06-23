import os
import mysql.connector
import cv2 as cv 

#camera
def testDevice(source):
   cap = cv.VideoCapture(source) 
   if cap is None or not cap.isOpened():
       print('Warning: unable to open video source: ', source)

#connection
cnx = mysql.connector.connect(
        host="192.168.2.105",
        #port=3310,
        user="admin",
        password="admin",
        db="testDB")
cur = cnx.cursor()


#Arduino MEGA
x= os.path.exists('/dev/ttyACM0')
y= os.path.exists('/dev/ttyACM1')

#print(x)
#print(y)

if x==1 or y==1:	
        query="UPDATE equipment SET `status` = 1 WHERE `equipment_name` = 'Arduino MEGA';"
        cur.execute(query)
        cnx.commit()
        cnx.close()
        print("Arduino MEGA connected")
else:
        query="UPDATE equipment SET `status` = 0 WHERE `equipment_name` = 'Arduino MEGA';"
        cur.execute(query)
        cnx.commit()
        cnx.close()
        print("not connected")




testDevice(0) # no printout
#testDevice(1) # prints message

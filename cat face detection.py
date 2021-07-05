#!C:\Users\Jim\AppData\Local\Programs\Python\Python39\python.exe
import cgi
photo = ('C://xampp//htdocs//catpic.jpg')

import cv2

face_cascade = cv2.CascadeClassifier('cat_face.xml')

img = cv2.imread(photo)
print(img)
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

faces = face_cascade.detectMultiScale(gray, scaleFactor=1.01, minNeighbors=5)

for x, y, w, h in faces:
    cv2.rectangle(img, (x, y), (x + w, y + h), (0, 255, 0), 3)

# save image
status = cv2.imwrite('C://xampp//htdocs//result.png', img)
cv2.waitKey()

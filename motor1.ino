#include <Servo.h>
Servo myservo;
Servo myservo1;
Servo myservo2;
int x=0;
int y;

int enA = 9;
int in1 = A0;
int in2 = A1;

void setup()
{
  Serial.begin(9600);
  myservo.attach(12); 
  myservo1.attach(10);
  myservo2.attach(11);
  pinMode(enA, OUTPUT);
  pinMode(in1, OUTPUT);
  pinMode(in2, OUTPUT);
  
}
void demoOne()
{
  if(Serial.available() > 0)
  {
    y=Serial.read();
  if(y=='H'){
  digitalWrite(in1, HIGH);
  digitalWrite(in2, LOW);
  analogWrite(enA, 105);

  myservo2.write(65);
  delay(500);
  myservo1.write(90);
  delay(500);
  myservo.write(175);
  delay(500);
  myservo1.write(180);
  delay(500);
  myservo.write(76);
  delay(500);
  myservo2.write(65);
  delay(500);
  
  }
  //Serial.flush();
  if(y=='L'){
  digitalWrite(in1, LOW);
  digitalWrite(in2, LOW);
  delay(2000);
  digitalWrite(in1, HIGH);
  digitalWrite(in2, LOW);}
  delay(500);
  //Serial.flush();
  }
  //if(Serial.available() > 0)
  //{Serial.write(y);}
  
}

void loop()
{
  demoOne();
  //
  if(Serial.available() > 0){
  x=Serial.read();
    if(x=='B'){
    myservo2.write(120);
    delay(500);
    myservo1.write(90);
    delay(500);
    myservo.write(175);
    delay(500);
    myservo1.write(180);
    delay(500);
    myservo.write(76);
    delay(500);
    myservo2.write(65);
    delay(500);
    //Serial.flush();
    }

    if(x=='A'){
    myservo2.write(65);
    delay(500);
    myservo1.write(90);
    delay(500);
    myservo.write(175);
    delay(500);
    myservo1.write(180);
    delay(500);
    myservo.write(76);
    delay(500);
    myservo2.write(65);
    delay(500);
    //Serial.flush();
    }

    if(x=='D'){
    myservo2.write(165);
    delay(500);
    myservo1.write(90);
    delay(500);
    myservo.write(175);
    delay(500);
    myservo1.write(180);
    delay(500);
    myservo.write(76);
    delay(500);
    myservo2.write(65);
    delay(500);
    //Serial.flush();
    }

    if(x=='O'){
    myservo2.write(0);
    delay(500);
    myservo1.write(90);
    delay(500);
    myservo.write(175);
    delay(500);
    myservo1.write(180);
    delay(500);
    myservo.write(76);
    delay(500);
    myservo2.write(65);
    delay(500);
    //HSerial.flush();
    }
    
   // myservo1.write(0);
   // delay(1000);
  //myservo.write(65);
  //delay(1000);
  //myservo.write(120);
  //delay(1000);
    //myservo1.write(165);
    //delay(1000);
    
  }
  
}

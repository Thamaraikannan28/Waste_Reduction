<h1 align="center">Food Waste Reduction</h1>


## :innocent: What is the problem?

We are facing many different challenges across the world such as environmental accidents, global warming and industrial pollution but wastage of food is also one of the most important challenge that many of us are not aware of. Recent global study says that the maximum wastage of fruits and vegetables (around 20 percent) happens during retail and consumption. Therefore, the consumers and retailers plays a major role not only in the reduction of food waste but also contributes to the Sustainable Development Goals to resolve hunger and malnutrition, and also reduce food waste across the globe by 2030. 

## :thinking: How can technology help?

 In order to control this, a simple change can be made with the help of sensors which is an IoT based system in addition with the Machine Learning algorithm. This change will not only be helpful in preserving the nation's economy but also helps in serving the people with hunger and malnutrition. 
 
## :bulb: Idea

  The idea is to create an IOT based system with sensors and microcontroller for the real time monitoring of the temperature, humidity and methane gas emission by the fruits and vegetables which are carried over long distance. The data will be sent to the IBM cloud for further analysis and prediction. The users will be provided with the application or the website in order to monitor during long distance transportation of fruits and vegetables. The user will be notified with an alert message if the food items start rotting. This will definitely help us in preventing the food waste about 40% in our daily life.

## :open_file_folder: The Architecture

     1.	DHT11 sensor and MQ4 sensor will be kept inside a container box for monitoring.
     2.	The data will be sent to the cloud for future analysis and it also stored in the database.
     3.	The user will monitor the current conditions of the fruits and vegetables over a period of time.
     4.	The user will be notified with the alert message at the time when the parameters exceed the threshold value, so that the user can isolate that box and sell it for the immediate usage purposes.

## 🗃️: LONG DESCRIPTION:

          ## :pushpin: CHALLENGES DURING LONG DISTANCE TRANSPORTATION:

          There are lot of factors which are responsible for causing food loss and food waste. As mentioned earlier, food waste occurs at all the stages of food supply chain. Fruits and vegetables are the most wasted food items. Retailers and consumers are purely responsible for food waste after the cultivation of fruits and vegetables. Fruits and vegetables have to be transported from retailers to consumers for consumption. Therefore, transportation plays a very important role in the supply chain. Fruits and vegetables cannot be delivered to the customer in a right time and in a right quality without proper transportation. Therefore, transportation plays even more important role in perishable food like fruits and vegetables because of short shelf life, high perishable, required controlled temperature. Transportation related challenges are very high in the India because of unavailability of well transportation mode, high cost of transportation, lack of temperature controlled vehicle for the movement of goods etc. During transportation, there is high possibility of at least one-fourth of the fruits and vegetables getting decayed which ultimately leads to wastage of fruits and vegetables. Therefore, we are in urgent need of finding some solution in order prevent the food waste during transportation without any refrigeration support. Temperature violations that lead to food loss have been a major issue for tracking companies, as many do not have established standards for accepting or rejecting temperature-controlled shipments. Being able to identify the potential locations, equipment, and circumstances under which a violation can happen ahead of time can improve the likelihood that your products will arrive in good condition. Shippers should also make sure that the carriers they work with, should have reliable equipment to avoid problems due to defective insulation or poor air circulation. By avoiding such issues on the road, transportation efficiency increases while negative environmental impact decreases.

          ## :pushpin:WORKING PRINCIPLE:

          Fruits and vegetables decay will definitely produce a measurable impact on temperature, humidity and methane gas. Therefore, a simple solution can be made by using an IOT based system. Sensors integrated with the NodeMCU ESP8266 wifi-module will be better for sensing the temperature, humidity and methane gas values. DHT11 sensor is used for measuring temperature and humidity. MQ4 gas sensor is used for measuring methane gas emitted by the decaying fruit or vegetable. Change of temperature, humidity and methane gas emission will differ from one fruit to the other and it also differ from one vegetable to the other. In this model, critical environmental factors like temperature, humidity and methane gas emission are monitored by using wireless sensor unit. The values from the DHT11 sensor and MQ4 sensor will be sent to the NodeMCU ESP8266 wifi-module. The values sensed by the sensors are analog but the microcontroller can process only the digital inputs. Therefore, the analog values will be converted into the digital input and it will be processed and then it will produce the output in analog format. The output from the microcontroller will be sent to the IBM cloud. The values from the cloud will also be updated in the database, website and the app created for it. All fruits and vegetables will have their own threshold value above which the fruits and vegetables will go into the decaying stage. When a fruit or vegetable crosses that particular threshold value, the user will be notified with the alert message. Therefore, it will be extremely useful for the user to know the exact condition of all the fruits and vegetables. The user will be benefitted in such a way that the user will be able to prevent the food waste during the stage of transportation. Finally, the app or the website created for it, will produce the details of the fruits and vegetables which are being transported through long distance. The user will be able to get the exact condition of the fruits and vegetables being transported.

          ## :round_pushpin:HARDWARE REQUIREMENT:

          * NODE MCU
          * DHT 11 
          * MQ 4

          ## :round_pushpin:SOFTWARE REQUIREMENT:

          * Arduino software 
               * IBM  cloud 
               * Visual Studio Code for website
               * Xampp server
               * PyCharm (running flask)

          ## :pushpin:Implementation:

          The DHT11 sensor, MQ4 gas sensor and NodeMCU ESP8266 (microcontroller) as a whole must be integrated with each of the boxes present in the food container. DHT11 is a temperature and humidity sensor. It has the operating voltage of about 3.5V to 5.5V. It can measure the temperature which ranges from 0o Celsius to 50o Celsius. It can also measure the humidity values which ranges from 20% to 90%. MQ4 sensor is used for measuring methane gas. It has good sensitivity to combustible gas in wide range. It has high sensitivity to methane gas and natural gas and it has low sensitivity to alcohol and smoke. It is capable of producing fast response and it is guaranteed for stability and long life. It can detect the concentration of methane gas from 200- 10000 ppm. These two sensors are connected to the NodeMCU ESP8266 microcontroller. The microcontroller has the operating voltage of 3.3V and its input voltage is between 7-12V. It has 16 digital input and output pins and it has 1 analog input pin. NodeMCU is provided with about128 KB RAM and 4MB of flash memory to store data and programs. This microprocessor supports RTOS and operates at 80MHz to 160 MHz adjustable clock frequency. The reason for selecting this microcontroller is that it is provided with high processing power with-in built Wi-Fi module. After integrating the NodeMCU ESP8266 with the sensors, program is uploaded into the NodeMCU ESP8266 board. After uploading, the NodeMCU ESP8266 will do appropriate functions uploaded into it and it will be sent to the cloud server (Adafruit cloud) and to the database. The IBM is one of the popular cloud services which can be used for storing and monitoring the real time sensed values. It contains a greater number of features which will be very helpful for the users in analysing the data. It also provides the service of sending notification to the mail etc. The data from the cloud will also be sent to the website and the app created for it. The food waste reduction application created for it, will provide the facilities of displaying the sensor values and it will also give an alert message to the user whenever the fruits or vegetables in the boxes enters into the stage of decaying. It also provides the possibility for the user knowing the exact condition of that particular fruit which is transported.

## :clipboard:Conclusion:

 Internet of Things is one of the oldest technologies but it is still the most popular technology which plays a very important role in our day to day life. The integrated IOT- based food waste reduction model will be helpful in reducing the food waste during the transportation process. Therefore, it helps in reducing nearly 40% of the daily waste. As a result, the farmers will be benefitted very much and it also reduces the food waste during retail and consumption. The components used in this model are available in low cost. The components used in this model will not be subjected to any technical issues. As food waste occurs mostly during transporting the food items through long distance, this model can be implemented during long distance transportation of fruits and vegetables.


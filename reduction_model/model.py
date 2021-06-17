import os
os.chdir("C:\food model\reduction_model")
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
import sklearn
from sklearn import model_selection
from sklearn.ensemble import RandomForestClassifier
from sklearn.tree import DecisionTreeClassifier, export_graphviz
from sklearn.model_selection import train_test_split
from sklearn.metrics import confusion_matrix
from sklearn.metrics import accuracy_score
from sklearn.metrics import classification_report
df=pd.read_csv('foodwastagee.csv')
df.head(14)
df.isnull().sum()
X = df.iloc[:,[0,1,2,3,4,5,8]]
y= df.iloc[:,9]
X_train, X_test, y_train, y_test = train_test_split(X,y,test_size=0.30, random_state=0)
from sklearn.naive_bayes import GaussianNB 
gnb = GaussianNB()
gnb.fit(X_train, y_train)
model = GaussianNB()
model.fit(X,y)
predictions = model.predict(X_test)
#from sklearn import metrics
y_pred = gnb.predict(X_test)
print("CLASSIFICATION REPORT:")
print(classification_report(y_test,predictions))
print("CONFUSION MATRIX:\n")
print(confusion_matrix(y_test,predictions))

print("\nACCURACY:")
print("\tAccuracy of this algorithm for a given dataset = ",accuracy_score(y_test,predictions)*100,"%",sep="")
import pickle
pickle.dump(model, open('model.pkl','wb'))

model=pickle.load(open('model.pkl','rb'))
print(model.predict([[23.0, 71, 23.1, 17.0, 0.1, 0, 60]]))

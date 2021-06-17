import requests

url = ' http://127.0.0.1:5000/results'
r = requests.post(url,json={'temp_p':31, 'humid_p':62,'temp_mc':31, 'humid_mc':62, 'dev':0, 'hdev':0, 'rh':90})

print(r.json())
import urllib.request
url = "http://127.0.0.1:8000/versions"

response = urllib.request.urlopen(url)

# importing the module
import json
data = json.loads(response.read())
for i in data['data']:
    print("Year : ",i['attributes']['year'])
    print("Series : ",i['attributes']['series'])
    print("Color : ",i['attributes']['color'])
    print("Tampo : ",i['attributes']['tampo'])
    print("Color : ",i['attributes']['base_color'])
    print("Window color : ",i['attributes']['window_color'])
    print("Interior color : ",i['attributes']['interior_color'])
    print("Wheel type : ",i['attributes']['wheel_type'])
    print("Toy : ",i['attributes']['toy'])
    print("Country : ",i['attributes']['country'])
    print("\n")
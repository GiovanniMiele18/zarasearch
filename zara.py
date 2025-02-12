import requests
from bs4 import BeautifulSoup
import json

# URL del prodotto Zara
url = 'https://www.zara.com/it/it/pullover-con-bottoni-spalle-p03920135.html?v1=424938363&ajax=true'

# Richiedi la pagina del prodotto
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

# Estrai le informazioni desiderate (questo dipenderà dalla struttura HTML della pagina)
product_name = soup.find('h1', class_='product-name').text.strip()
product_price = soup.find('span', class_='price').text.strip()
product_description = soup.find('div', class_='description').text.strip()

# Crea un dizionario con i dati del prodotto
product_data = {
    'name': product_name,
    'price': product_price,
    'description': product_description
}

# Salva i dati in un file JSON
with open('product_data.json', 'w') as json_file:
    json.dump(product_data, json_file, ensure_ascii=False, indent=4)

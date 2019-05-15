from flask import Flask
from flask import request
import time
import nltk
from nltk.corpus import words
nltk.download('words')
import re
app = Flask(__name__)
@app.route('/')
def hello_world():
    wording = set(words.words())
    alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
    letter = request.args.get('data')
    org_data = ""
    maxi = 0
    for key in range(0,62):
        enc_data = ""
        word_token = []
        counter = 0
        for i in letter:
            if i in alphabet :
                enc_data = enc_data+alphabet[(key+alphabet.find(i))%62]
            else:
                enc_data = enc_data+i
        word_token = [i.lower() for i in enc_data.split("^")]
        word_token = [re.sub('[!@#$.,;()""?{}]<>/:+=*&%`~1234567890', '', i) for i in word_token]
        counter = sum([1 for i in word_token if i in wording])
        if(counter>maxi):
            maxi = counter
            org_data = enc_data
    new_data = ""
    for i in org_data:
        if i == '^':
            new_data = new_data + " "
        else:
            new_data = new_data + i
    return str(new_data)


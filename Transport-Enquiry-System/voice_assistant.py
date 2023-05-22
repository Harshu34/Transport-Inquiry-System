



# from flask import Flask, request, jsonify
# # import pyttsx3

# app = Flask(__name__)
# engine = pyttsx3.init()

# @app.route('/speak', methods=['POST'])
# def speak():
#     data = request.get_json()
#     text = data['text']
#     language = data['language'] if 'language' in data else 'en-in'
#     engine.setProperty('voice', f'{language}_x-sgb#male')
#     engine.say(text)
#     engine.runAndWait()
#     return jsonify({'message': 'success'})

# if __name__ == '__main__':
#     app.run()











import pyttsx3
import speech_recognition as sr

engine =pyttsx3.init('sapi5')
voices = engine.getProperty('voices')
engine.setProperty('voice',voices[1].id)


def speak(audiovoice):
    # engine.say('Hello')
    print(audiovoice)
    engine.say(audiovoice)
    engine.runAndWait()
    
    
    
def takevoicecommand():
    r=sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        r.pause_threshold=1
        try:
            audio=r.listen(source,timeout=100,phrase_time_limit=10)
            print("Compiling your voice please wait..")
            
            #select language.....
            text=r.recognize_google(audio,language='en-in')
            
            # text=r.recognize_google(audio,language='hi-IN')
            print(text)
        except Exception as e:
            speak('Unable to recognize your voice')
            text="try again"
        return text
    
        
# speak('my audio')

if __name__=='__main__':
    while True:
        work=takevoicecommand()
        
        if 'hello' in work:
            speak('hello sir')
            speak('how can i help you')
            # exit()   
        elif 'thank you' in work:
            speak('thankyou for using our service')
            exit()
        else:
            speak('please give valid input')






# import pyttsx3
# import speech_recognition as sr

# engine = pyttsx3.init()
# engine.setProperty('voice', 'voices/hindi-tts-1.0.0/hi_female_1')

# def speak(audiovoice):
#     engine.setProperty('voice', 'voices/hindi-tts-1.0.0/hi_female_1')
#     print(audiovoice)
#     engine.say(audiovoice)
#     engine.runAndWait()

# def takevoicecommand():
#     r = sr.Recognizer()
#     with sr.Microphone() as source:
#         print("Listening...")
#         r.pause_threshold = 1
#         try:
#             audio = r.listen(source, timeout=100, phrase_time_limit=10)
#             print("Compiling your voice please wait..")
#             text = r.recognize_google(audio, language='hi-IN')
#             print(text)
#         except Exception as e:
#             speak('Unable to recognize your voice')
#             text = "try again"
#         return text

# if __name__=='__main__':
#     while True:
#         work=takevoicecommand()
#         if 'हेलो' in work:
#             speak('हेलो सर')
#             exit()
#         if 'aur sb badhiya' in work:
#             speak('जी हाँ, सब ठीक है')
#             exit()
#         elif 'bye' in work:
#             speak('अलविदा...')
#             exit()













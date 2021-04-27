from django.shortcuts import render




def index(request):
    return render(request,'Home.html')

def signup(request):
    return render(request,'Sign up.html')
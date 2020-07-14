from django.urls import include, path
from my_contact_data import views
 
app_name = 'my_contact_data'
 
urlpatterns = [
     path('', views.home,name='home'),
     path('aboutus', views.aboutus,name='aboutus'),
     path('contactdata', views.contactus,name='contactdata'),
     path('resume', views.resume ,name='resume'),
     path('contact_form_submit',views.contact_form_submit,name='contact_form_submit'),

]


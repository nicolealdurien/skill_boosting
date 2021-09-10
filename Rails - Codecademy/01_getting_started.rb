# To start a new Rails app (presuming you were able to get Ruby/Rails installed ok):
# In the terminal: rails new appNameHere
# Then: bundle install
# Finally: rails server

# What do each of these do? The rails new command is like npx create-react-app nameOfApp.
# The bundle install command installs all the gems needed (software packages - think npm). 
# Each of these will be listed in the Gemfile (like package.json).
# The rails server command starts up the server, so you can go to localhost:whatever and see your app.

# Controller:
# What happens when you visit localhost:whatever? Something called the request/response cycle:
# 1. The browser makes a request for the URL localhost:whatever
# 2. That request hits the Rails router in config/routes.rb. The router recognizes the URL and sends the
# request to the controller.
# 3. The controller receives and processes the request, then passes the request to the view.
# 4. The view renders the page as HTML.
# 5. The controller sends the HTML back to the browser to be seen.

# So how do we create a controller?
# In the terminal: rails generate controller Pages
# In the code editor, open app/controllers/pages_controller.rb. Within the class PagesController,
# add a method called home:
# class PagesController < ApplicationController
#   def home
#   end
# end

# Methods in Rails controllers are also referred to as controller actions.

# Now let's create a route. Open config/routes.rb, and underneath the Rails.application.whatever line, add:
# get 'welcome' => 'pages#home'

# Now when a user vists our localhost:8000/welcome, the route we just created will tell Rails to send
# this request to the Pages controller's home action.

# Now let's move to the third part of the cycle and create a view. Open app/views/pages/home.html.erb, and
# add the following:

# <div class="main">
#   <div class="container">
#     <h1>Hello my name is Nicole</h1>
#     <p>I make Rails apps.</p>
#   </div>
# </div>

# You can view this by visiting localhost:8000/welcome in the browser.


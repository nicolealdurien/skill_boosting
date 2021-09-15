# INTRO TO PHP FUNCTIONS
# PHP uses snake case for variable names BUT camel case for function names.
# Functions are defined and invoked the same way as in (pre-ES6) JS.
# function greet() {
#   echo "Sup!";
# }
# greet();
#
# RETURN STATEMENTS - same as JS.
# Any function without a return statement returns NULL.
# If you try to use NULL in mathematical operations, it functions as 0.
#
# PARAMETERS - same as JS.
#
# DEFAULT PARAMETERS
# function greet($name = "old chum") {
#  echo, "Hello, $name!";
#  }
#
#  This will print Hello, (whatever name is passed in). If no name is passed in,
#  Hello, old chum! will be printed.
#
# PASS BY REFERENCE 
# Use a variable within a function without changing it permanently.
# (If you do want to change it permanently, prepend the parameter name with &.)
# function addx(&$param) {
#  $param = $param . "x";
#  echo $param
# } 
#
# We have assigned the parameter to be an alias for the argument variable,
# so changes to the parameter within the function will 
# permanently affect the argument variable. 


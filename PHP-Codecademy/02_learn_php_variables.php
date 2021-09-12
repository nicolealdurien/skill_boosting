# STRINGS
# https://www.php.net/manual/en/language.types.string.php
# String literals can be specified with either single or double quotes,
# or with heredoc or nowdoc syntax.
 
# ESCAPE SEQUENCES
# Use backslashes to escape double-quotes or newlines.

# CONCATENATION
# The concatenation operator in PHP is a period (.)
# echo "one" . "two" will print onetwo

# VARIABLES
# Variables can be declared and have values assigned at the same time.
# To declare a variable, precede it with a dollar sign.
# This is known as a sigil.
# The assignment operator is =.
# Variables can contain letters, numbers, and underscores. 
# They must start with either a letter or an underscore.
# Variable names ARE case sensitive.
# Common convention is to use snake case.

# USING VARIABLES
# Any reference to a variable must include the dollar sign.
# $favorite_food = "pizza";
# echo $favorite_food;

# VARIABLE PARSING (STRING INTERPOLATION)
# Works the same as JS *except* if there's a space after the variable name,
# you don't even technically need the curly braces.

# VARIABLE REASSIGNMENT
# Using the assignment operator (=) on a variable that has already been
# declared will reassign the variable.
# $color = blue
# $color = red
# echo $color will print out 'red'

# ASSIGNMENT EVALUATION
# During assigment, the computer will evaluate everything to the right
# of the = and assign the value to the chosen variable.
# PHP also has a concatenating assignment operator, .=
# $name = Tony;
# $name .= Stark;
# echo $name; will print 'Tony Stark'

# ALIAS/ASSIGN BY REFERENCE
# Using =& will create an alias.
# $Tony = "Stark";
# $Howard =& $Tony;
# echo $Howard; will print "Stark"
# If we reassign $Tony, $Tony = "Tiger";
# then echo $Howard; will print "Tiger"


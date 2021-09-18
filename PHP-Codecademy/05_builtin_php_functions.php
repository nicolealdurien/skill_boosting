# INTERNAL/BUILT-IN FUNCTIONS
#  
# gettype() takes a variable as an argument and returns a string
# that describes the argument's data type.
#  
# var_dump() prints details about the argument - data type, 
# length (if string)
#
# strrev() takes in a string and returns the reversed string.
#
# strtolower() takes a string and returns it all lowercase.
#
# str_repeat() takes a string as its 1st argument and a number
# as its 2nd. It then returns a string consisting of the 
# argument string repeated the 2nd argument number of times
# echo str_repeat("yo", 3) will print yoyoyo
#
# SUBSTRINGS 
# Portions of strings
# substr_count() returns the number of substrings within a string.
# It takes two arguments - the string to seach through ('the haystack')
# and the string to search FOR ('the needle').
#
# NUMBER FUNCTIONS
# abs() returns the absolute value of a number argument.
# round() returns an argument rounded to its nearest integer.
# rand() returns a random integer btw 0 and the largest number
# the current environment will allow.
# getrandmax() will tell you what that largest number is.
# You can also invoke rand() with 2 arguments representing the 
# smallest allowable and largest allowable random number.
# ( Fun fact: the 2nd argument can be larger than getrandmax(). )
# 
# DOCUMENTATION
# Documentation description for PHP can be confusing. For example:
# abs ( mixed $number ) : number
# The 'mixed' indicates that the function will accept either an
# integer or a float. The "number" ater the colon indicates the
# data type the function will return.
#
# A function that prints something but doesn't return a value
# will have : void instead of a return type. Similarly, a function
# that does not accept parameters will have 'void' within its
# parentheses.
#
# The description for substr_count() is more complicated:
# substr_count ( string $haystack , string $needle 
# [, int $offset = 0 [, int $length ]] ) : int
#
# Square brackets indicate optional parameters. The equal sign
# indicates a default value for a parameter.
# Offset indicates where to start counting. A negative offset will 
# start the count from the end of the string.
# Length specifies a maximum length after the offset to search 
# for the substring. A negative length counts from the end
# of the haystack string.
#
# PRE-DEFINED CONSTANTS
# Basically variables pre-set by PHP. They are typically all caps
# with underscores for spacing.
# https://www.php.net/manual/en/string.constants.php
# 
# Built-in functions often don't follow function naming conventions.
#

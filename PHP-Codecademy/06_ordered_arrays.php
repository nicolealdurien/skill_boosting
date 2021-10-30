# ORDERED ARRAYS
# The array() function creates an array of the arguments passed
# to it, in the order they were passed in.
#
# PHP arrays can contain mixed data types in a single array.
#
# The built-in function count() will return the number of 
# elements in an array.
#
# We can also skip the array function and just use square brackets.
# This is known as 'short array syntax'.
#
# PRINTING ARRAYS
# To print an array, we must use print_r() instead of echo. This
# prints in a human-readable format.
# If we just want to print the elements, in the array, we can
# convert the array into a string using the implode() function. This
# takes two arguments:
# - a string to use between each element (the "glue"), usually ", "
# - the array to be joined together (the "pieces").
#
# ACCESSING ELEMENTS - bracket notation as usual.
#
# Add to end of array as follows:
# $array[]="new element";
#
# Adding an index number within the brackets will reassign the value
# of that specific index:
# $array[0]="replacing first element"
#
# 'pop' and 'push'  in PHP are done with functions, array_pop() * array_push().
# The first argument to array_push must be the array you want to add to.
# The following arguments will be the things you want added.
#
# Shift and unshift work the same way.
#
# NESTED ARRAYS
#  

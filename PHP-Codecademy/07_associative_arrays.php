# 07 - Associative Arrays
# aka 'maps' - like JS objects, Python dicts, Ruby hashes
# key/value pairs
#  
# Using 'implode' on an associative  array prints only the values, not the keys.
# To see both, use print_r().
#
# Access the value of any given key with bracket notation.
# $grades["Bob"]= 90;
#
# Add new values to an associative array in the same fashion.
#
# Reset values of an existing key in the same fashion.
#
# Remove a key/value pair entirely using unset().
# unset($grades["Bob"])
# 
# Numbers can also be keys. If an element is added to an array without
# specifying a key (e.g., by using array_push()),  PHP will associate it 
# with the 'next' integer key.
# This is true even of associative arrays. If no integer keys have been used,
# the value will be associated with the key 0, otherwise it will be n+1 from
# the largest integer used thus far.
#
# Renenber, rand() generates a random integer.
#
# JOINING ARRAYS
# The union operator (+) takes two array opeands and returns a new array
# with any unique KEYS from the second array appended to the first array.
# (This means if you tried to join two ordered arrays of equal length this way,
# none of the values from the second array would appear in the union array.
# Why? Because the keys of both arrays would be exactly the same.
# Example:
# $array_one = [42, 27, 8675309];
# $array_two = ["Albus", "Percival", "Wulfric"];
#
# The keys of both arrays are 0, 1, 2.
#
# ASSIGN BY VALUE OR REFERENCE
# Like any other values, arrays can be assigned from one variable to another
# either by value or by reference.
# Assigning by value creates a copy that remains the same if the original
# is mutated. 
# Assigning by reference creates two variable names (aliases) that point to
# the same space in memory. They cannot be modified separately.
#
# $favorites = ["food"=>"pizza", "person"=>"myself", "dog"=>"Tadpole"];
# $copy = $favorites;
# $alias =& $favorites;
# $favorites["food"] = "NEW!";
# 
# echo $favorites["food"]; // Prints: NEW!
# echo $copy["food"]; // Prints: pizza
# echo $alias["food"]; // Prints: NEW!
#
# 
#
#

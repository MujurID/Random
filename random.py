import random

# Random string of length 5
result_str = ''.join((random.choice('abcdxyzpqr') for i in range(5)))
print(result_str)
# Output ryxay

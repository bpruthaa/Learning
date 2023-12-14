import numpy as np

arr = np.array([[1,2,3,4,5], [6,4,3,2,1]])
print(type(arr))
print("before reshaping")
print(arr)
print(arr.shape)
print("after reshaping")
newarry =arr.reshape(5, 2)
print(newarry)
print(newarry.shape)
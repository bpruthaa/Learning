import numpy as np
import pandas as pd
a = pd.Series([1,2,3,4])
print(a)
b = pd.Series([1,2.5,3,4])
print(b)
c = pd.date_range("20230101",periods = 6, freq = '6M')
d = pd.date_range("20230101",periods = 6, freq = '4H')
e = pd.date_range("20230101",periods = 6, freq = '1Y')
f = pd.date_range("20230101",periods = 6)
print(c)
print(d)
print(e)
print(f)
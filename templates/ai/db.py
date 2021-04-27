import pandas as pd 
col_names = ['pragnant' , 'glucose' , 'bp' , 'skin' , 'insulin','bmi','padigree','age','label']
df=pd.read_csv("diabetes.csv",header=None,names=col_names)
# print(df.tail(6))
# print(df.sample(3))
# print(df.info())
# print(df.describe())
feature_cols = ['pragnant' , 'glucose' , 'bp' , 'insulin','bmi','padigree','age','label']
X=df[feature_cols]
y=df.label


from sklearn.model_selection import train_test_split
X_train,X_test,y_train,y_test = train_test_split(X,y, test_size=0.25 ,random_state=0)


from sklearn.linear_model import LogisticRegression
logreg= LogisticRegression(max_iter=200)
logreg.fit(X_train,y_train)

y_pred=logreg.predict(X_test)

from sklearn import metrics

cnf_matrix= metrics.confusion_matrix(y_test,y_pred)
print(cnf_matrix)



import  numpy as np
import matplotlib.pyplot as plt 
import seaborn as sns

class_names = [0,1]
fig,ax = plt.subplots()
tick_marks = np.arange(len(class_names))
plt.xticks(tick_marks,class_names)
plt.yticks(tick_marks,class_names)

sns.heatmap(pd.DataFrame(cnf_metrix),annot=True,cmap='YlGnBu',fmt='g')
ax.xaxis.set_label_position("top")

plt.title("Confusion matrix", y=1.1)
plt.ylabel("Actual label")
plt.xlabel("Predicted label")
plt.Text(0.5,257.44,"predicted label")
plt.show()

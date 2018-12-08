# npm 安装webpack
~~~
npm i webpack -g
~~~

# webpack 打包
~~~
 webpack ./mian.js  ./dist/my.js
~~~ 

# webpack.config.js 打包

项目根目录 新建webpack.config.js

~~~
 const path=require('path');

module.exports={
 entry:path.join(__dirname,'./mian'),//需要打包文件
 output:{
   path:path.join(__dirname,'./dist'),//打包文件输出目录
   filename:'pack.js',//打包的文件名
 }

}

~~~ 

控制台输入

~~~
 webpack
~~~ 

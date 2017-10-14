<!DOCTYPE html>
<html lang="en" class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CodeFlask.js -- Simple code editor for awesome web pages.</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="codeflaskstyle.css">
  <link rel="stylesheet" href="codeflask.css">
  <link rel="stylesheet" href="prism.css">
</head>
<body>
<div class="call-to-action-wrapper">
<div class="code-window animate fade-in">
<div class="code-editor CodeFlask"><textarea class="CodeFlask__textarea"></textarea><pre class="CodeFlask__pre  language-php"><code class="CodeFlask__code  language-php">$books <span class="token operator">=</span> $<span class="token keyword">this</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">manyToMany</span><span class="token punctuation">(</span><span class="token string">'authors'</span><span class="token punctuation">,</span><span class="token string">'books_authors'</span><span class="token punctuation">,</span><span class="token string">'book_id'</span><span class="token punctuation">,</span><span class="token string">'author_id'</span><span class="token punctuation">)</span>
              <span class="token operator">-</span><span class="token operator">&gt;</span><span class="token keyword">get</span><span class="token punctuation">(</span><span class="token function">array</span><span class="token punctuation">(</span><span class="token string">'author_name'</span><span class="token punctuation">,</span> <span class="token string">'description'</span><span class="token punctuation">,</span> <span class="token string">'title'</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre></div>
</div>
</div>
    <script>
        window.onload = function() 
        {
            CodeFlask.run('.code-editor', 'php')
        };
    </script>
    <script src="codeflask.js"></script>
    <script src="prism.min.js"></script>
</body>
</html>
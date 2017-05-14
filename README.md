# composer
工具：
    window：
        git客户端：http://msysgit.github.io/
        下载乌龟：http://download.tortoisegit.org/tgit/
        安装 composer   http://www.phpcomposer.com/
步骤：
    初始化：composer init   项目目录
            composer install 安装
    提交到 github
    登录  composer->submit->添加github地址（https://github.com/dwwing/composer.git）
    测试拷贝到本地：composer create-project dwwing/composer a1 dev-master  --prefer-dist

    github实施推送到composer(未成功)
        github配置：settings -> Integrations & services -> Add service(Packagist) ->toke(https://packagist.org/profile/)

    php代码中修改compser
        执行更新：composer dump

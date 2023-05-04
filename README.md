## Laravel ログ出力検証用
Lavarel10


## コンテナ構成
```
docker
    ├- web
    ├- php
    └- db
```

コマンド
```
docker-compose exec -it web /bin/sh
docker-compose exec -it php bash
docker-compose exec -it db bash
```


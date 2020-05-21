# magento-2-hello-world

⚓ a magento 2 hello world module.

Ashraf_HelloWorld

This is Hello World Module for Magento 2 compatible with Magento - 2.3.5.

![Alt text](ss/127_0_0_1_mg_sd_2_3_5_ashraf_page_view.png?raw=true "Optional Title")

## 🤖 Installation

Copy Ashraf folder in at app/code of ur Magento root folder

it should be like 

Magento_Root_Directory/app/code/Ashraf

```bash
php bin/magento module:enable Ashraf_HelloWorld
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
php bin/magento cache:flush
php bin/magento cache:clean

```

## 📦 Usage

```python

goto /ashraf/page/view after ur magento url
like mgento-2.3.5.com/ashraf/page/view
or http://127.0.0.1/mgento/ashraf/page/view

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## 📜 License
[MIT](https://github.com/AshrafHatia/magento-2-hello-world/blob/master/LICENSE)
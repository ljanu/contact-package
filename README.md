# Výuka tvorby balíčků v larvelu

**[Čerpal sem z vydea na youtube](https://youtu.be/H-euNqEKACA)** - 
Vytvořen balíček Contact

Obsahuje
- kontaktní formulář
- odeslání formuláře na službu [Mailtrap.io](https://mailtrap.io/inboxes)
- zápis zprávy do databáze

## Vytvoření balíčku v Laravelu
### Založení místa pro vývoj
vytvořit nový adresář 
```shell
tudy/contact
```
V tomto adresáři vytvořit nový soubor composer.json příkazem
```shell
composer init
```
Po zadání příkazu se v terminálu spustí dotazník pro doplnění udajů do souboru. 

Zložit adresář **src** pro umístění kodu

---

### První soubory a registrace
1. třída `src/ContactServicesProvider.php`
2. routy `src/route/web.php`
3. zaregistrovat routy v metodě `boot`  třídy `ContactServicesProvidr.php`
4. registrace jmeného prosturu v souboru `/tudy/contact/composer.jsou` 
```shell
"autoload": {
        "psr-4": {
            "Tudy\\Contact\\": "src/"
        }
    },
```
5. zajištění automatické regostrace služby v laravelu.  
```shell
"extra": {
        "laravel": {
            "providers": [
                "Tudy\\Contact\\ContactServiceProvider"
            ]

        }
    }
```
6. registrace balíčku v souboru projektu `composer.json`
```shell
"autoload-dev": {
        "psr-4": {
            "Tudy\\Contact\\": "tudy/contact/src/"
        }
    },
```
PO TĚCHTO KROCÍCH JSOU FUNKČNÍ ZAREGOSTROVANÉ ROUTY

---

### Nahrání baličku na GitHub a packagist
1. na githubu založit nový adresář
2. po založení prohlédnout doporučené postupy
3. v adresáři `tudy/contact`  spustit terminál a tam spustit příkaz
```shell
git ini
```
4. pak nahrát na git pomocí phpstorm (nevím přesně jak jsem to udělal)
5. přihlásit na [packagist](https://packagist.org/) pomocí github
6. [vložit nový balíček](https://packagist.org/packages/submit) vložit adresu balíčku na github
7. Pokud nejde automatická aktualizace nastavit na [githubu ](https://github.com/ljanu/contact-package/settings/hooks) propojení
   s tokenem na [pacakgist](https://packagist.org/profile/)
   
---



### Instalace do nového projektu
```shell
composer require tudy/contact
```
Balíšek je funkční.

Pokud neproběhla automatická registrace služby baličku v je nutné doplnit v  `config/app.php`  
v sekci `providers` službu `Tudy\Contact\ContactServiceProvider::class`

---

### Použití poštovního serveru MailTrap

server přijíma poštu pro zkušební účely
1. Přihlášení pomocí github
2. [Základní ifno o nastavení](https://mailtrap.io/inboxes/1405470/messages)
3. konfigurace v laravelu soubor `.env` 
```shell
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=5bc1a1a866b04f
MAIL_PASSWORD=01f3a439b5f8e1
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@gametall.cz
MAIL_FROM_NAME="${APP_NAME}"
```


---

### Další příkazy composer a artisan
aktualizace
```shell
composer update
```
### odinstalovat balíček
```shell
composer remove tudy/contact 
```
### zvěřejnění nastavitalných položek
```shell
php artisan vendor:publish
```



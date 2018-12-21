# Roveri Sistemas SDK

Simples SDK PHP para consultas API [Roveri](roveri.inf.br)

## Usage

`composer require thalita/roveri-sdk`

#### Create Client
```php
use Roveri\SDK\Factory;

$token = 'TOKEN';

$client = (new Factory)->create($token);
```
ou
```php
use Roveri\SDK\Client;

$token = 'TOKEN';

$client = new Client($token, new GuzzleHttp\Client);
```

#### Consulta Sintegra
```php
$response = $client->consultaSintegra(string $cnpj, string $uf, string $inscricaoEstadual = '') : SimpleXMLElement;
```
#### Consulta CNPJ
```php
$response = $client->consultaCnpj(string $cnpj) : SimpleXMLElement;
```
#### Consulta CPF
```php
$response = $client->consultaCpf(string $cpf, string $dataNascimento = '') : SimpleXMLElement;
```
#### Consulta Simples Nacional
```php
$response = $client->consultaSimplesNacional(string $cnpj) : SimpleXMLElement;
```
#### Consulta NF-e
```php
$response = $client->consultaNFe(string $chave) : SimpleXMLElement;
```
#### Consulta CT-e
```php
$response = $client->consultaCTe(string $chave) : SimpleXMLElement;
```
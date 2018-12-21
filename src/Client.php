<?php

namespace Roveri\SDK;

use SimpleXMLElement;
use GuzzleHttp\Client as Guzzle;

class Client
{
    const API_URL = 'https://www.roveri.inf.br/consultas/';

    private $token;
    private $guzzle;

    public function __construct(string $token, Guzzle $guzzle)
    {
        $this->token = $token;
        $this->guzzle = $guzzle;
    }

    public function consultaSintegra(string $cnpj, string $uf, string $inscricaoEstadual = '') : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'cnpj' => $cnpj,
            'ie' => $inscricaoEstadual,
            'UF' => $uf
        ];

        $response = $this->guzzle->get(self::API_URL . 'sintegra.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }

    public function consultaNFe(string $chave) : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'chave' => $chave,
        ];

        $response = $this->guzzle->get(self::API_URL . 'nfe.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }

    public function consultaCTe(string $chave) : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'chave' => $chave,
        ];

        $response = $this->guzzle->get(self::API_URL . 'cte.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }

    public function consultaCnpj(string $cnpj) : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'cnpj' => $cnpj,
        ];

        $response = $this->guzzle->get(self::API_URL . 'cnpj.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }

    public function consultaCpf(string $cpf, string $dataNascimento = '') : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'cpf' => $cpf,
            'dtNasc' => $dataNascimento,
        ];

        $response = $this->guzzle->get(self::API_URL . 'cpf.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }

    public function consultaSimplesNacional(string $cnpj) : SimpleXMLElement
    {
        $query = [
            'token' => $this->token,
            'cnpj' => $cnpj,
        ];

        $response = $this->guzzle->get(self::API_URL . 'simples.php', [
            'query' => $query
        ]);

        return simplexml_load_string((string)$response->getBody());
    }
}
<?php
/**
 * Cielo
 *
 * Cliente para o Web Service da Cielo.
 *
 * O Web Service permite efetuar vendas com cartões de bandeira
 * VISA e Mastercard, tanto no débito quanto em compras a vista ou parceladas.
 *
 * Licença
 * Este código fonte está sob a licença GPL-3.0+
 *
 * @category   Library
 * @package    MrPrompt\Cielo\Tests
 * @subpackage Cliente
 * @copyright  Thiago Paes <mrprompt@gmail.com> (c) 2013
 * @license    GPL-3.0+
 */
namespace MrPrompt\Cielo\Tests;

use MrPrompt\Cielo\Ambiente\Producao;

class ProducaoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Producao
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Producao();
    }

    /**
     * @test
     * @covers \MrPrompt\Cielo\Ambiente\Producao::getUrl()
     */
    public function getUrlDeveRetornarValorDaConstante()
    {
        $result = $this->object->getUrl();

        $this->assertEquals(Producao::URL, $result);
    }
}

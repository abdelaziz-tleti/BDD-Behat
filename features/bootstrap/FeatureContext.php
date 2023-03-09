<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;



/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
   
   
/**
     * @Given an empty basket
     */
    public function anEmptyBasket()
    {
        $this->basket = new Basket();
    }   

    /**
     * @When  I add a new product costing :arg1 € to the basket
     */
    public function aProductCostingIsAddedToTheBasket($arg1)
    {
        $product = new Product($arg1);
        $this->basket->add($product);
    }

     /**
     * @Then The basket price is :arg1 $
     */
    public function theBasketPriceIs($arg1)
    {
        if($this->basket->price() != $arg1){
            throw new Exception('Le prix ne correspond pas');
        }
    }



    /**
     * @Then the basket price is :arg1 €
     */
    public function theBasketPriceIsEur($arg1)
    {
        if($this->basket->price() != $arg1){
            throw new Exception('Le prix ne correspond pas');
        }    }

}

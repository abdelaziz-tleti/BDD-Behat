Feature: Basket

  Scenario: Basket with one product
    Given an empty basket
    When I add a new product costing 10 € to the basket
    Then the basket price is 10 €


  Scenario: Basket from fixtures
    Given the fixtures file "product" is loaded
    When I add a new product
    Then the basket price is 10 €
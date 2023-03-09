Feature: Basket

  Scenario: Basket with one product
    Given an empty basket
    When I add a new product costing 10 € to the basket
    Then the basket price is 10 €


  Scenario: Basket with one product
    Given the fixtures file "parameters.yml" is loaded
    When I add a new product costing 10 € to the basket
    Then the basket price is 10 €
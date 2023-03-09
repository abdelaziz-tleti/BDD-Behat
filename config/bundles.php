<?php 
return [
    // ...
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true], // should already be enabled.
    // ..
    Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle::class => ['test' => true],
    Fidry\AliceDataFixtures\Bridge\Symfony\FidryAliceDataFixturesBundle::class => ['test' => true],
];
<?php

//  namespace
//  le namespace doit réfléter l'emplacement des fichiers
namespace Class\Paypal;

// 1 méthode avec le Use voir ligne 14
Use \Class\Users\User;

class Payment
{
    public function __construct()
    {
        var_dump(new User());
        // 2 methode pour ne pas utiliser le use mettre le \
       // var_dump(new \User());

    }
}
<?php

namespace Bytefusion\Lunch\DefaultBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BytefusionLunchDefaultBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

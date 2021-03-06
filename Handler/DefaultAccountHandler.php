<?php

namespace BSP\AccountingBundle\Handler;

use BSP\AccountingBundle\Handler\AbstractAccountHandler;

class DefaultAccountHandler extends AbstractAccountHandler
{
    public function generateId( array $options = null )
    {
        return uniqid();
    }

    public function getType()
    {
        return 'default';
    }
}

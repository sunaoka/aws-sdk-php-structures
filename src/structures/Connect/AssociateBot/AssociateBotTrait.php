<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateBot;

trait AssociateBotTrait
{
    /**
     * @param AssociateBotRequest $args
     * @return void
     */
    public function associateBot(AssociateBotRequest $args)
    {
        parent::associateBot($args->toArray());
    }
}

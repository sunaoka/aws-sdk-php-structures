<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateBot;

trait DisassociateBotTrait
{
    /**
     * @param DisassociateBotRequest $args
     * @return void
     */
    public function disassociateBot(DisassociateBotRequest $args)
    {
        parent::disassociateBot($args->toArray());
    }
}

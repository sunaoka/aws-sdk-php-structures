<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateLexBot;

trait DisassociateLexBotTrait
{
    /**
     * @param DisassociateLexBotRequest $args
     * @return void
     */
    public function disassociateLexBot(DisassociateLexBotRequest $args)
    {
        parent::disassociateLexBot($args->toArray());
    }
}

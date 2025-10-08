<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateLexBot;

trait AssociateLexBotTrait
{
    /**
     * @param AssociateLexBotRequest $args
     * @return void
     */
    public function associateLexBot(AssociateLexBotRequest $args)
    {
        parent::associateLexBot($args->toArray());
    }
}

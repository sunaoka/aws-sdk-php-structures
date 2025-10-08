<?php

namespace Sunaoka\Aws\Structures\Connect\ListLexBots;

trait ListLexBotsTrait
{
    /**
     * @param ListLexBotsRequest $args
     * @return ListLexBotsResponse
     */
    public function listLexBots(ListLexBotsRequest $args)
    {
        $result = parent::listLexBots($args->toArray());
        return new ListLexBotsResponse($result->toArray());
    }
}

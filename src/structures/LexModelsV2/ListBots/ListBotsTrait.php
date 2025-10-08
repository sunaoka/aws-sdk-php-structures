<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots;

trait ListBotsTrait
{
    /**
     * @param ListBotsRequest $args
     * @return ListBotsResponse
     */
    public function listBots(ListBotsRequest $args)
    {
        $result = parent::listBots($args->toArray());
        return new ListBotsResponse($result->toArray());
    }
}

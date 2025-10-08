<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBots;

trait GetBotsTrait
{
    /**
     * @param GetBotsRequest $args
     * @return GetBotsResponse
     */
    public function getBots(GetBotsRequest $args)
    {
        $result = parent::getBots($args->toArray());
        return new GetBotsResponse($result->toArray());
    }
}

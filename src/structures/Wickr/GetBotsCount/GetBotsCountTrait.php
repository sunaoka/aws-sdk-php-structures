<?php

namespace Sunaoka\Aws\Structures\Wickr\GetBotsCount;

trait GetBotsCountTrait
{
    /**
     * @param GetBotsCountRequest $args
     * @return GetBotsCountResponse
     */
    public function getBotsCount(GetBotsCountRequest $args)
    {
        $result = parent::getBotsCount($args->toArray());
        return new GetBotsCountResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\GameLift\GetGameSessionLogUrl;

trait GetGameSessionLogUrlTrait
{
    /**
     * @param GetGameSessionLogUrlRequest $args
     * @return GetGameSessionLogUrlResponse
     */
    public function getGameSessionLogUrl(GetGameSessionLogUrlRequest $args)
    {
        $result = parent::getGameSessionLogUrl($args->toArray());
        return new GetGameSessionLogUrlResponse($result->toArray());
    }
}

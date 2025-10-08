<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchId;

trait GetMatchIdTrait
{
    /**
     * @param GetMatchIdRequest $args
     * @return GetMatchIdResponse
     */
    public function getMatchId(GetMatchIdRequest $args)
    {
        $result = parent::getMatchId($args->toArray());
        return new GetMatchIdResponse($result->toArray());
    }
}

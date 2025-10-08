<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetMatches;

trait GetMatchesTrait
{
    /**
     * @param GetMatchesRequest $args
     * @return GetMatchesResponse
     */
    public function getMatches(GetMatchesRequest $args)
    {
        $result = parent::getMatches($args->toArray());
        return new GetMatchesResponse($result->toArray());
    }
}

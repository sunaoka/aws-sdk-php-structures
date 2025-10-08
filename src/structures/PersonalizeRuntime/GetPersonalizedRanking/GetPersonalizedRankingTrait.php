<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetPersonalizedRanking;

trait GetPersonalizedRankingTrait
{
    /**
     * @param GetPersonalizedRankingRequest $args
     * @return GetPersonalizedRankingResponse
     */
    public function getPersonalizedRanking(GetPersonalizedRankingRequest $args)
    {
        $result = parent::getPersonalizedRanking($args->toArray());
        return new GetPersonalizedRankingResponse($result->toArray());
    }
}

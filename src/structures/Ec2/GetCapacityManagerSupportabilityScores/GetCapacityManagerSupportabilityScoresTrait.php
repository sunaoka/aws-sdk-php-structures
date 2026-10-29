<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerSupportabilityScores;

trait GetCapacityManagerSupportabilityScoresTrait
{
    /**
     * @param GetCapacityManagerSupportabilityScoresRequest $args
     * @return GetCapacityManagerSupportabilityScoresResponse
     */
    public function getCapacityManagerSupportabilityScores(GetCapacityManagerSupportabilityScoresRequest $args)
    {
        $result = parent::getCapacityManagerSupportabilityScores($args->toArray());
        return new GetCapacityManagerSupportabilityScoresResponse($result->toArray());
    }
}

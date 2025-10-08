<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores;

trait GetSpotPlacementScoresTrait
{
    /**
     * @param GetSpotPlacementScoresRequest $args
     * @return GetSpotPlacementScoresResponse
     */
    public function getSpotPlacementScores(GetSpotPlacementScoresRequest $args)
    {
        $result = parent::getSpotPlacementScores($args->toArray());
        return new GetSpotPlacementScoresResponse($result->toArray());
    }
}

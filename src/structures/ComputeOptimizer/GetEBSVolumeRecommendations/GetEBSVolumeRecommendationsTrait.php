<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations;

trait GetEBSVolumeRecommendationsTrait
{
    /**
     * @param GetEBSVolumeRecommendationsRequest $args
     * @return GetEBSVolumeRecommendationsResponse
     */
    public function getEBSVolumeRecommendations(GetEBSVolumeRecommendationsRequest $args)
    {
        $result = parent::getEBSVolumeRecommendations($args->toArray());
        return new GetEBSVolumeRecommendationsResponse($result->toArray());
    }
}

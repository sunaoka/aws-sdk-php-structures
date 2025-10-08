<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEC2InstanceRecommendations;

trait ExportEC2InstanceRecommendationsTrait
{
    /**
     * @param ExportEC2InstanceRecommendationsRequest $args
     * @return ExportEC2InstanceRecommendationsResponse
     */
    public function exportEC2InstanceRecommendations(ExportEC2InstanceRecommendationsRequest $args)
    {
        $result = parent::exportEC2InstanceRecommendations($args->toArray());
        return new ExportEC2InstanceRecommendationsResponse($result->toArray());
    }
}

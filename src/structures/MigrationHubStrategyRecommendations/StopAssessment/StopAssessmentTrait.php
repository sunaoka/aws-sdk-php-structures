<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StopAssessment;

trait StopAssessmentTrait
{
    /**
     * @param StopAssessmentRequest $args
     * @return StopAssessmentResponse
     */
    public function stopAssessment(StopAssessmentRequest $args)
    {
        $result = parent::stopAssessment($args->toArray());
        return new StopAssessmentResponse($result->toArray());
    }
}

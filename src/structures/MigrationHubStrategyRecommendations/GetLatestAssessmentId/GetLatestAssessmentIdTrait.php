<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetLatestAssessmentId;

trait GetLatestAssessmentIdTrait
{
    /**
     * @param GetLatestAssessmentIdRequest $args
     * @return GetLatestAssessmentIdResponse
     */
    public function getLatestAssessmentId(GetLatestAssessmentIdRequest $args)
    {
        $result = parent::getLatestAssessmentId($args->toArray());
        return new GetLatestAssessmentIdResponse($result->toArray());
    }
}

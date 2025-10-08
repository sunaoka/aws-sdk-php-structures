<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores;

trait ListConformancePackComplianceScoresTrait
{
    /**
     * @param ListConformancePackComplianceScoresRequest $args
     * @return ListConformancePackComplianceScoresResponse
     */
    public function listConformancePackComplianceScores(ListConformancePackComplianceScoresRequest $args)
    {
        $result = parent::listConformancePackComplianceScores($args->toArray());
        return new ListConformancePackComplianceScoresResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings;

trait BatchGetIncidentFindingsTrait
{
    /**
     * @param BatchGetIncidentFindingsRequest $args
     * @return BatchGetIncidentFindingsResponse
     */
    public function batchGetIncidentFindings(BatchGetIncidentFindingsRequest $args)
    {
        $result = parent::batchGetIncidentFindings($args->toArray());
        return new BatchGetIncidentFindingsResponse($result->toArray());
    }
}

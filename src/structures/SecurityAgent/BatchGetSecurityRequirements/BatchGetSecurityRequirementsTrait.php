<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetSecurityRequirements;

trait BatchGetSecurityRequirementsTrait
{
    /**
     * @param BatchGetSecurityRequirementsRequest $args
     * @return BatchGetSecurityRequirementsResponse
     */
    public function batchGetSecurityRequirements(BatchGetSecurityRequirementsRequest $args)
    {
        $result = parent::batchGetSecurityRequirements($args->toArray());
        return new BatchGetSecurityRequirementsResponse($result->toArray());
    }
}

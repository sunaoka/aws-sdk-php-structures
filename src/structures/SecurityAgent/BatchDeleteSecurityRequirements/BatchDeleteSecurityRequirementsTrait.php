<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteSecurityRequirements;

trait BatchDeleteSecurityRequirementsTrait
{
    /**
     * @param BatchDeleteSecurityRequirementsRequest $args
     * @return BatchDeleteSecurityRequirementsResponse
     */
    public function batchDeleteSecurityRequirements(BatchDeleteSecurityRequirementsRequest $args)
    {
        $result = parent::batchDeleteSecurityRequirements($args->toArray());
        return new BatchDeleteSecurityRequirementsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchCreateSecurityRequirements;

trait BatchCreateSecurityRequirementsTrait
{
    /**
     * @param BatchCreateSecurityRequirementsRequest $args
     * @return BatchCreateSecurityRequirementsResponse
     */
    public function batchCreateSecurityRequirements(BatchCreateSecurityRequirementsRequest $args)
    {
        $result = parent::batchCreateSecurityRequirements($args->toArray());
        return new BatchCreateSecurityRequirementsResponse($result->toArray());
    }
}

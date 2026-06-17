<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchUpdateSecurityRequirements;

trait BatchUpdateSecurityRequirementsTrait
{
    /**
     * @param BatchUpdateSecurityRequirementsRequest $args
     * @return BatchUpdateSecurityRequirementsResponse
     */
    public function batchUpdateSecurityRequirements(BatchUpdateSecurityRequirementsRequest $args)
    {
        $result = parent::batchUpdateSecurityRequirements($args->toArray());
        return new BatchUpdateSecurityRequirementsResponse($result->toArray());
    }
}

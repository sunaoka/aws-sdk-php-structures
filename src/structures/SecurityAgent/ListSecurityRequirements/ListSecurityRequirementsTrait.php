<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListSecurityRequirements;

trait ListSecurityRequirementsTrait
{
    /**
     * @param ListSecurityRequirementsRequest $args
     * @return ListSecurityRequirementsResponse
     */
    public function listSecurityRequirements(ListSecurityRequirementsRequest $args)
    {
        $result = parent::listSecurityRequirements($args->toArray());
        return new ListSecurityRequirementsResponse($result->toArray());
    }
}

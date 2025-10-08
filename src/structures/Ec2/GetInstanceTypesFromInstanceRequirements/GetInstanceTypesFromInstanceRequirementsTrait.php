<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceTypesFromInstanceRequirements;

trait GetInstanceTypesFromInstanceRequirementsTrait
{
    /**
     * @param GetInstanceTypesFromInstanceRequirementsRequest $args
     * @return GetInstanceTypesFromInstanceRequirementsResponse
     */
    public function getInstanceTypesFromInstanceRequirements(GetInstanceTypesFromInstanceRequirementsRequest $args)
    {
        $result = parent::getInstanceTypesFromInstanceRequirements($args->toArray());
        return new GetInstanceTypesFromInstanceRequirementsResponse($result->toArray());
    }
}

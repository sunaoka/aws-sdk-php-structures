<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization;

trait DescribeAffectedEntitiesForOrganizationTrait
{
    /**
     * @param DescribeAffectedEntitiesForOrganizationRequest $args
     * @return DescribeAffectedEntitiesForOrganizationResponse
     */
    public function describeAffectedEntitiesForOrganization(DescribeAffectedEntitiesForOrganizationRequest $args)
    {
        $result = parent::describeAffectedEntitiesForOrganization($args->toArray());
        return new DescribeAffectedEntitiesForOrganizationResponse($result->toArray());
    }
}

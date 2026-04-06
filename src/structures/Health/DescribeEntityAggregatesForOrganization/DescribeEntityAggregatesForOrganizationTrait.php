<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization;

trait DescribeEntityAggregatesForOrganizationTrait
{
    /**
     * @param DescribeEntityAggregatesForOrganizationRequest $args
     * @return DescribeEntityAggregatesForOrganizationResponse
     */
    public function describeEntityAggregatesForOrganization(DescribeEntityAggregatesForOrganizationRequest $args)
    {
        $result = parent::describeEntityAggregatesForOrganization($args->toArray());
        return new DescribeEntityAggregatesForOrganizationResponse($result->toArray());
    }
}

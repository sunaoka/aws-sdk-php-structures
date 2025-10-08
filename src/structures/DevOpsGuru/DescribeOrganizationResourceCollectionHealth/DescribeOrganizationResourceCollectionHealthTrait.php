<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth;

trait DescribeOrganizationResourceCollectionHealthTrait
{
    /**
     * @param DescribeOrganizationResourceCollectionHealthRequest $args
     * @return DescribeOrganizationResourceCollectionHealthResponse
     */
    public function describeOrganizationResourceCollectionHealth(
        DescribeOrganizationResourceCollectionHealthRequest $args,
    ) {
        $result = parent::describeOrganizationResourceCollectionHealth($args->toArray());
        return new DescribeOrganizationResourceCollectionHealthResponse($result->toArray());
    }
}

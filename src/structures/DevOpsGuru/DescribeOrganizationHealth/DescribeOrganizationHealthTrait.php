<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationHealth;

trait DescribeOrganizationHealthTrait
{
    /**
     * @param DescribeOrganizationHealthRequest $args
     * @return DescribeOrganizationHealthResponse
     */
    public function describeOrganizationHealth(DescribeOrganizationHealthRequest $args)
    {
        $result = parent::describeOrganizationHealth($args->toArray());
        return new DescribeOrganizationHealthResponse($result->toArray());
    }
}

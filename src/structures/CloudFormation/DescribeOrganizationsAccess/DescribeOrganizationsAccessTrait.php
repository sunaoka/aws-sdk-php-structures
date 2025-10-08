<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeOrganizationsAccess;

trait DescribeOrganizationsAccessTrait
{
    /**
     * @param DescribeOrganizationsAccessRequest $args
     * @return DescribeOrganizationsAccessResponse
     */
    public function describeOrganizationsAccess(DescribeOrganizationsAccessRequest $args)
    {
        $result = parent::describeOrganizationsAccess($args->toArray());
        return new DescribeOrganizationsAccessResponse($result->toArray());
    }
}

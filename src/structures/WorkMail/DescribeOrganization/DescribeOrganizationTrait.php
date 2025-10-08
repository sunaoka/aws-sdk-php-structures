<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeOrganization;

trait DescribeOrganizationTrait
{
    /**
     * @param DescribeOrganizationRequest $args
     * @return DescribeOrganizationResponse
     */
    public function describeOrganization(DescribeOrganizationRequest $args)
    {
        $result = parent::describeOrganization($args->toArray());
        return new DescribeOrganizationResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization;

trait DescribeEventDetailsForOrganizationTrait
{
    /**
     * @param DescribeEventDetailsForOrganizationRequest $args
     * @return DescribeEventDetailsForOrganizationResponse
     */
    public function describeEventDetailsForOrganization(DescribeEventDetailsForOrganizationRequest $args)
    {
        $result = parent::describeEventDetailsForOrganization($args->toArray());
        return new DescribeEventDetailsForOrganizationResponse($result->toArray());
    }
}

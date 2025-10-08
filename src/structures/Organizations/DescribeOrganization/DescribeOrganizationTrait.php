<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeOrganization;

trait DescribeOrganizationTrait
{
    /**
     * @return DescribeOrganizationResponse
     */
    public function describeOrganization()
    {
        $result = parent::describeOrganization();
        return new DescribeOrganizationResponse($result->toArray());
    }
}

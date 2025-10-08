<?php

namespace Sunaoka\Aws\Structures\Health\DescribeHealthServiceStatusForOrganization;

trait DescribeHealthServiceStatusForOrganizationTrait
{
    /**
     * @return DescribeHealthServiceStatusForOrganizationResponse
     */
    public function describeHealthServiceStatusForOrganization()
    {
        $result = parent::describeHealthServiceStatusForOrganization();
        return new DescribeHealthServiceStatusForOrganizationResponse($result->toArray());
    }
}

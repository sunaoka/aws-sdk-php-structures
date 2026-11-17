<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagKeysForOrganization;

trait DescribeTagKeysForOrganizationTrait
{
    /**
     * @return DescribeTagKeysForOrganizationResponse
     */
    public function describeTagKeysForOrganization()
    {
        $result = parent::describeTagKeysForOrganization();
        return new DescribeTagKeysForOrganizationResponse($result->toArray());
    }
}

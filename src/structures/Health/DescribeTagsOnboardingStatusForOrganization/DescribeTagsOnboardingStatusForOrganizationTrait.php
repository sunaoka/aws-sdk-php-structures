<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsOnboardingStatusForOrganization;

trait DescribeTagsOnboardingStatusForOrganizationTrait
{
    /**
     * @return DescribeTagsOnboardingStatusForOrganizationResponse
     */
    public function describeTagsOnboardingStatusForOrganization()
    {
        $result = parent::describeTagsOnboardingStatusForOrganization();
        return new DescribeTagsOnboardingStatusForOrganizationResponse($result->toArray());
    }
}

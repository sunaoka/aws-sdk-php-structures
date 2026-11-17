<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsOnboardingStatus;

trait DescribeTagsOnboardingStatusTrait
{
    /**
     * @return DescribeTagsOnboardingStatusResponse
     */
    public function describeTagsOnboardingStatus()
    {
        $result = parent::describeTagsOnboardingStatus();
        return new DescribeTagsOnboardingStatusResponse($result->toArray());
    }
}

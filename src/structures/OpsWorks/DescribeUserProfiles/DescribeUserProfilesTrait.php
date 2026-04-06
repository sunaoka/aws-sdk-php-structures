<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeUserProfiles;

trait DescribeUserProfilesTrait
{
    /**
     * @param DescribeUserProfilesRequest $args
     * @return DescribeUserProfilesResponse
     */
    public function describeUserProfiles(DescribeUserProfilesRequest $args)
    {
        $result = parent::describeUserProfiles($args->toArray());
        return new DescribeUserProfilesResponse($result->toArray());
    }
}

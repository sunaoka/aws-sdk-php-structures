<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeInstanceProfiles;

trait DescribeInstanceProfilesTrait
{
    /**
     * @param DescribeInstanceProfilesRequest $args
     * @return DescribeInstanceProfilesResponse
     */
    public function describeInstanceProfiles(DescribeInstanceProfilesRequest $args)
    {
        $result = parent::describeInstanceProfiles($args->toArray());
        return new DescribeInstanceProfilesResponse($result->toArray());
    }
}

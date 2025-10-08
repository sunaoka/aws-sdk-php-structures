<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeAuthenticationProfiles;

trait DescribeAuthenticationProfilesTrait
{
    /**
     * @param DescribeAuthenticationProfilesRequest $args
     * @return DescribeAuthenticationProfilesResponse
     */
    public function describeAuthenticationProfiles(DescribeAuthenticationProfilesRequest $args)
    {
        $result = parent::describeAuthenticationProfiles($args->toArray());
        return new DescribeAuthenticationProfilesResponse($result->toArray());
    }
}

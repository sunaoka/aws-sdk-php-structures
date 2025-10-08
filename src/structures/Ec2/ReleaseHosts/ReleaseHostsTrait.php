<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseHosts;

trait ReleaseHostsTrait
{
    /**
     * @param ReleaseHostsRequest $args
     * @return ReleaseHostsResponse
     */
    public function releaseHosts(ReleaseHostsRequest $args)
    {
        $result = parent::releaseHosts($args->toArray());
        return new ReleaseHostsResponse($result->toArray());
    }
}

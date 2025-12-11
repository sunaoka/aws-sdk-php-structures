<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersions;

trait GetIpamPrefixListResolverVersionsTrait
{
    /**
     * @param GetIpamPrefixListResolverVersionsRequest $args
     * @return GetIpamPrefixListResolverVersionsResponse
     */
    public function getIpamPrefixListResolverVersions(GetIpamPrefixListResolverVersionsRequest $args)
    {
        $result = parent::getIpamPrefixListResolverVersions($args->toArray());
        return new GetIpamPrefixListResolverVersionsResponse($result->toArray());
    }
}

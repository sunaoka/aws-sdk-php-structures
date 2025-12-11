<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPrefixListResolverVersionEntries;

trait GetIpamPrefixListResolverVersionEntriesTrait
{
    /**
     * @param GetIpamPrefixListResolverVersionEntriesRequest $args
     * @return GetIpamPrefixListResolverVersionEntriesResponse
     */
    public function getIpamPrefixListResolverVersionEntries(GetIpamPrefixListResolverVersionEntriesRequest $args)
    {
        $result = parent::getIpamPrefixListResolverVersionEntries($args->toArray());
        return new GetIpamPrefixListResolverVersionEntriesResponse($result->toArray());
    }
}

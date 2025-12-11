<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPrefixListResolver;

trait CreateIpamPrefixListResolverTrait
{
    /**
     * @param CreateIpamPrefixListResolverRequest $args
     * @return CreateIpamPrefixListResolverResponse
     */
    public function createIpamPrefixListResolver(CreateIpamPrefixListResolverRequest $args)
    {
        $result = parent::createIpamPrefixListResolver($args->toArray());
        return new CreateIpamPrefixListResolverResponse($result->toArray());
    }
}

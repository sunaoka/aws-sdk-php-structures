<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPrefixListResolverTarget;

trait CreateIpamPrefixListResolverTargetTrait
{
    /**
     * @param CreateIpamPrefixListResolverTargetRequest $args
     * @return CreateIpamPrefixListResolverTargetResponse
     */
    public function createIpamPrefixListResolverTarget(CreateIpamPrefixListResolverTargetRequest $args)
    {
        $result = parent::createIpamPrefixListResolverTarget($args->toArray());
        return new CreateIpamPrefixListResolverTargetResponse($result->toArray());
    }
}

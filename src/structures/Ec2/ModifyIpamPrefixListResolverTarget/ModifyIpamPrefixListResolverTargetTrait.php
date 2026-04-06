<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolverTarget;

trait ModifyIpamPrefixListResolverTargetTrait
{
    /**
     * @param ModifyIpamPrefixListResolverTargetRequest $args
     * @return ModifyIpamPrefixListResolverTargetResponse
     */
    public function modifyIpamPrefixListResolverTarget(ModifyIpamPrefixListResolverTargetRequest $args)
    {
        $result = parent::modifyIpamPrefixListResolverTarget($args->toArray());
        return new ModifyIpamPrefixListResolverTargetResponse($result->toArray());
    }
}

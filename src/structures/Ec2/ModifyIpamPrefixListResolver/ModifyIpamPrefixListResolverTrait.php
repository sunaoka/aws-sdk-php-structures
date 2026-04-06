<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPrefixListResolver;

trait ModifyIpamPrefixListResolverTrait
{
    /**
     * @param ModifyIpamPrefixListResolverRequest $args
     * @return ModifyIpamPrefixListResolverResponse
     */
    public function modifyIpamPrefixListResolver(ModifyIpamPrefixListResolverRequest $args)
    {
        $result = parent::modifyIpamPrefixListResolver($args->toArray());
        return new ModifyIpamPrefixListResolverResponse($result->toArray());
    }
}

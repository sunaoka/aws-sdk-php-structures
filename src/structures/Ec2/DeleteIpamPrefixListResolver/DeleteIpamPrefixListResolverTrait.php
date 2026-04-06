<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPrefixListResolver;

trait DeleteIpamPrefixListResolverTrait
{
    /**
     * @param DeleteIpamPrefixListResolverRequest $args
     * @return DeleteIpamPrefixListResolverResponse
     */
    public function deleteIpamPrefixListResolver(DeleteIpamPrefixListResolverRequest $args)
    {
        $result = parent::deleteIpamPrefixListResolver($args->toArray());
        return new DeleteIpamPrefixListResolverResponse($result->toArray());
    }
}

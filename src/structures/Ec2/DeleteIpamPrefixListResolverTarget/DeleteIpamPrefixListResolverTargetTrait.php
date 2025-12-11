<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPrefixListResolverTarget;

trait DeleteIpamPrefixListResolverTargetTrait
{
    /**
     * @param DeleteIpamPrefixListResolverTargetRequest $args
     * @return DeleteIpamPrefixListResolverTargetResponse
     */
    public function deleteIpamPrefixListResolverTarget(DeleteIpamPrefixListResolverTargetRequest $args)
    {
        $result = parent::deleteIpamPrefixListResolverTarget($args->toArray());
        return new DeleteIpamPrefixListResolverTargetResponse($result->toArray());
    }
}

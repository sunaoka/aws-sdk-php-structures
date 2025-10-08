<?php

namespace Sunaoka\Aws\Structures\Ec2\DeletePublicIpv4Pool;

trait DeletePublicIpv4PoolTrait
{
    /**
     * @param DeletePublicIpv4PoolRequest $args
     * @return DeletePublicIpv4PoolResponse
     */
    public function deletePublicIpv4Pool(DeletePublicIpv4PoolRequest $args)
    {
        $result = parent::deletePublicIpv4Pool($args->toArray());
        return new DeletePublicIpv4PoolResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePublicIpv4Pool;

trait CreatePublicIpv4PoolTrait
{
    /**
     * @param CreatePublicIpv4PoolRequest $args
     * @return CreatePublicIpv4PoolResponse
     */
    public function createPublicIpv4Pool(CreatePublicIpv4PoolRequest $args)
    {
        $result = parent::createPublicIpv4Pool($args->toArray());
        return new CreatePublicIpv4PoolResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPool;

trait CreateIpamPoolTrait
{
    /**
     * @param CreateIpamPoolRequest $args
     * @return CreateIpamPoolResponse
     */
    public function createIpamPool(CreateIpamPoolRequest $args)
    {
        $result = parent::createIpamPool($args->toArray());
        return new CreateIpamPoolResponse($result->toArray());
    }
}

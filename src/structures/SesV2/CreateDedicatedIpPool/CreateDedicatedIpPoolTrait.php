<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDedicatedIpPool;

trait CreateDedicatedIpPoolTrait
{
    /**
     * @param CreateDedicatedIpPoolRequest $args
     * @return CreateDedicatedIpPoolResponse
     */
    public function createDedicatedIpPool(CreateDedicatedIpPoolRequest $args)
    {
        $result = parent::createDedicatedIpPool($args->toArray());
        return new CreateDedicatedIpPoolResponse($result->toArray());
    }
}

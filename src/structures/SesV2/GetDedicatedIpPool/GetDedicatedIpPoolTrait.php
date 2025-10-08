<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIpPool;

trait GetDedicatedIpPoolTrait
{
    /**
     * @param GetDedicatedIpPoolRequest $args
     * @return GetDedicatedIpPoolResponse
     */
    public function getDedicatedIpPool(GetDedicatedIpPoolRequest $args)
    {
        $result = parent::getDedicatedIpPool($args->toArray());
        return new GetDedicatedIpPoolResponse($result->toArray());
    }
}

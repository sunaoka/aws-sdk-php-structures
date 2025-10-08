<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteDedicatedIpPool;

trait DeleteDedicatedIpPoolTrait
{
    /**
     * @param DeleteDedicatedIpPoolRequest $args
     * @return DeleteDedicatedIpPoolResponse
     */
    public function deleteDedicatedIpPool(DeleteDedicatedIpPoolRequest $args)
    {
        $result = parent::deleteDedicatedIpPool($args->toArray());
        return new DeleteDedicatedIpPoolResponse($result->toArray());
    }
}

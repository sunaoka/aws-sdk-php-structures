<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamPool;

trait DeleteIpamPoolTrait
{
    /**
     * @param DeleteIpamPoolRequest $args
     * @return DeleteIpamPoolResponse
     */
    public function deleteIpamPool(DeleteIpamPoolRequest $args)
    {
        $result = parent::deleteIpamPool($args->toArray());
        return new DeleteIpamPoolResponse($result->toArray());
    }
}

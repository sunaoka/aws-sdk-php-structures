<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPool;

trait ModifyIpamPoolTrait
{
    /**
     * @param ModifyIpamPoolRequest $args
     * @return ModifyIpamPoolResponse
     */
    public function modifyIpamPool(ModifyIpamPoolRequest $args)
    {
        $result = parent::modifyIpamPool($args->toArray());
        return new ModifyIpamPoolResponse($result->toArray());
    }
}

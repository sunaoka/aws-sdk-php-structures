<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyIpPools;

trait ModifyIpPoolsTrait
{
    /**
     * @param ModifyIpPoolsRequest $args
     * @return ModifyIpPoolsResponse
     */
    public function modifyIpPools(ModifyIpPoolsRequest $args)
    {
        $result = parent::modifyIpPools($args->toArray());
        return new ModifyIpPoolsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyLoadBalancerAttributes;

trait ModifyLoadBalancerAttributesTrait
{
    /**
     * @param ModifyLoadBalancerAttributesRequest $args
     * @return ModifyLoadBalancerAttributesResponse
     */
    public function modifyLoadBalancerAttributes(ModifyLoadBalancerAttributesRequest $args)
    {
        $result = parent::modifyLoadBalancerAttributes($args->toArray());
        return new ModifyLoadBalancerAttributesResponse($result->toArray());
    }
}

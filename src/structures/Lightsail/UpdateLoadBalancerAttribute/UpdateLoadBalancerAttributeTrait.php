<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateLoadBalancerAttribute;

trait UpdateLoadBalancerAttributeTrait
{
    /**
     * @param UpdateLoadBalancerAttributeRequest $args
     * @return UpdateLoadBalancerAttributeResponse
     */
    public function updateLoadBalancerAttribute(UpdateLoadBalancerAttributeRequest $args)
    {
        $result = parent::updateLoadBalancerAttribute($args->toArray());
        return new UpdateLoadBalancerAttributeResponse($result->toArray());
    }
}

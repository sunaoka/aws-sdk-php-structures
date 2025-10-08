<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroupAttributes;

trait ModifyTargetGroupAttributesTrait
{
    /**
     * @param ModifyTargetGroupAttributesRequest $args
     * @return ModifyTargetGroupAttributesResponse
     */
    public function modifyTargetGroupAttributes(ModifyTargetGroupAttributesRequest $args)
    {
        $result = parent::modifyTargetGroupAttributes($args->toArray());
        return new ModifyTargetGroupAttributesResponse($result->toArray());
    }
}

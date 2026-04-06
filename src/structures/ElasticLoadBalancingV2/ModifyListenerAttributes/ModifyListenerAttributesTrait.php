<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListenerAttributes;

trait ModifyListenerAttributesTrait
{
    /**
     * @param ModifyListenerAttributesRequest $args
     * @return ModifyListenerAttributesResponse
     */
    public function modifyListenerAttributes(ModifyListenerAttributesRequest $args)
    {
        $result = parent::modifyListenerAttributes($args->toArray());
        return new ModifyListenerAttributesResponse($result->toArray());
    }
}

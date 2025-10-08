<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener;

trait ModifyListenerTrait
{
    /**
     * @param ModifyListenerRequest $args
     * @return ModifyListenerResponse
     */
    public function modifyListener(ModifyListenerRequest $args)
    {
        $result = parent::modifyListener($args->toArray());
        return new ModifyListenerResponse($result->toArray());
    }
}

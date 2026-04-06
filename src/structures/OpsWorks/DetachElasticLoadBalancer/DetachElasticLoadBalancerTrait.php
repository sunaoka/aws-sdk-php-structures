<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DetachElasticLoadBalancer;

trait DetachElasticLoadBalancerTrait
{
    /**
     * @param DetachElasticLoadBalancerRequest $args
     * @return void
     */
    public function detachElasticLoadBalancer(DetachElasticLoadBalancerRequest $args)
    {
        parent::detachElasticLoadBalancer($args->toArray());
    }
}

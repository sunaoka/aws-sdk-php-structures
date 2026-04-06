<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AttachElasticLoadBalancer;

trait AttachElasticLoadBalancerTrait
{
    /**
     * @param AttachElasticLoadBalancerRequest $args
     * @return void
     */
    public function attachElasticLoadBalancer(AttachElasticLoadBalancerRequest $args)
    {
        parent::attachElasticLoadBalancer($args->toArray());
    }
}

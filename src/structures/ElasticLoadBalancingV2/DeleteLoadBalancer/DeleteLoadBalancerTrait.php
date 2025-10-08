<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteLoadBalancer;

trait DeleteLoadBalancerTrait
{
    /**
     * @param DeleteLoadBalancerRequest $args
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer(DeleteLoadBalancerRequest $args)
    {
        $result = parent::deleteLoadBalancer($args->toArray());
        return new DeleteLoadBalancerResponse($result->toArray());
    }
}

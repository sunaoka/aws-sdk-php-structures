<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancerPolicy;

trait CreateLoadBalancerPolicyTrait
{
    /**
     * @param CreateLoadBalancerPolicyRequest $args
     * @return CreateLoadBalancerPolicyResponse
     */
    public function createLoadBalancerPolicy(CreateLoadBalancerPolicyRequest $args)
    {
        $result = parent::createLoadBalancerPolicy($args->toArray());
        return new CreateLoadBalancerPolicyResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerPoliciesOfListener;

trait SetLoadBalancerPoliciesOfListenerTrait
{
    /**
     * @param SetLoadBalancerPoliciesOfListenerRequest $args
     * @return SetLoadBalancerPoliciesOfListenerResponse
     */
    public function setLoadBalancerPoliciesOfListener(SetLoadBalancerPoliciesOfListenerRequest $args)
    {
        $result = parent::setLoadBalancerPoliciesOfListener($args->toArray());
        return new SetLoadBalancerPoliciesOfListenerResponse($result->toArray());
    }
}

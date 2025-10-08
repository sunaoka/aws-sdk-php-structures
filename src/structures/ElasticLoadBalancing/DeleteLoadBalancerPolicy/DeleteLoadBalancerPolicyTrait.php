<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeleteLoadBalancerPolicy;

trait DeleteLoadBalancerPolicyTrait
{
    /**
     * @param DeleteLoadBalancerPolicyRequest $args
     * @return DeleteLoadBalancerPolicyResponse
     */
    public function deleteLoadBalancerPolicy(DeleteLoadBalancerPolicyRequest $args)
    {
        $result = parent::deleteLoadBalancerPolicy($args->toArray());
        return new DeleteLoadBalancerPolicyResponse($result->toArray());
    }
}

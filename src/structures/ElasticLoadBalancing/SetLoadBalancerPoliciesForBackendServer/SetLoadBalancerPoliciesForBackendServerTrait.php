<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerPoliciesForBackendServer;

trait SetLoadBalancerPoliciesForBackendServerTrait
{
    /**
     * @param SetLoadBalancerPoliciesForBackendServerRequest $args
     * @return SetLoadBalancerPoliciesForBackendServerResponse
     */
    public function setLoadBalancerPoliciesForBackendServer(SetLoadBalancerPoliciesForBackendServerRequest $args)
    {
        $result = parent::setLoadBalancerPoliciesForBackendServer($args->toArray());
        return new SetLoadBalancerPoliciesForBackendServerResponse($result->toArray());
    }
}

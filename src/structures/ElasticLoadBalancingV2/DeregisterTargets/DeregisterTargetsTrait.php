<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeregisterTargets;

trait DeregisterTargetsTrait
{
    /**
     * @param DeregisterTargetsRequest $args
     * @return DeregisterTargetsResponse
     */
    public function deregisterTargets(DeregisterTargetsRequest $args)
    {
        $result = parent::deregisterTargets($args->toArray());
        return new DeregisterTargetsResponse($result->toArray());
    }
}

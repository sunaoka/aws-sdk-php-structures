<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RegisterTargets;

trait RegisterTargetsTrait
{
    /**
     * @param RegisterTargetsRequest $args
     * @return RegisterTargetsResponse
     */
    public function registerTargets(RegisterTargetsRequest $args)
    {
        $result = parent::registerTargets($args->toArray());
        return new RegisterTargetsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Rds\DeregisterDBProxyTargets;

trait DeregisterDBProxyTargetsTrait
{
    /**
     * @param DeregisterDBProxyTargetsRequest $args
     * @return DeregisterDBProxyTargetsResponse
     */
    public function deregisterDBProxyTargets(DeregisterDBProxyTargetsRequest $args)
    {
        $result = parent::deregisterDBProxyTargets($args->toArray());
        return new DeregisterDBProxyTargetsResponse($result->toArray());
    }
}

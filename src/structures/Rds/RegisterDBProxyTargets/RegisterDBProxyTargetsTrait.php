<?php

namespace Sunaoka\Aws\Structures\Rds\RegisterDBProxyTargets;

trait RegisterDBProxyTargetsTrait
{
    /**
     * @param RegisterDBProxyTargetsRequest $args
     * @return RegisterDBProxyTargetsResponse
     */
    public function registerDBProxyTargets(RegisterDBProxyTargetsRequest $args)
    {
        $result = parent::registerDBProxyTargets($args->toArray());
        return new RegisterDBProxyTargetsResponse($result->toArray());
    }
}

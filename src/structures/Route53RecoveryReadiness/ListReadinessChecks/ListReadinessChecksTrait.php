<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListReadinessChecks;

trait ListReadinessChecksTrait
{
    /**
     * @param ListReadinessChecksRequest $args
     * @return ListReadinessChecksResponse
     */
    public function listReadinessChecks(ListReadinessChecksRequest $args)
    {
        $result = parent::listReadinessChecks($args->toArray());
        return new ListReadinessChecksResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListAssociatedRoute53HealthChecks;

trait ListAssociatedRoute53HealthChecksTrait
{
    /**
     * @param ListAssociatedRoute53HealthChecksRequest $args
     * @return ListAssociatedRoute53HealthChecksResponse
     */
    public function listAssociatedRoute53HealthChecks(ListAssociatedRoute53HealthChecksRequest $args)
    {
        $result = parent::listAssociatedRoute53HealthChecks($args->toArray());
        return new ListAssociatedRoute53HealthChecksResponse($result->toArray());
    }
}

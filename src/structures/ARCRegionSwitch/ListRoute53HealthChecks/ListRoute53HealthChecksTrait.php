<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecks;

trait ListRoute53HealthChecksTrait
{
    /**
     * @param ListRoute53HealthChecksRequest $args
     * @return ListRoute53HealthChecksResponse
     */
    public function listRoute53HealthChecks(ListRoute53HealthChecksRequest $args)
    {
        $result = parent::listRoute53HealthChecks($args->toArray());
        return new ListRoute53HealthChecksResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateHealthCheck;

trait AssociateHealthCheckTrait
{
    /**
     * @param AssociateHealthCheckRequest $args
     * @return AssociateHealthCheckResponse
     */
    public function associateHealthCheck(AssociateHealthCheckRequest $args)
    {
        $result = parent::associateHealthCheck($args->toArray());
        return new AssociateHealthCheckResponse($result->toArray());
    }
}

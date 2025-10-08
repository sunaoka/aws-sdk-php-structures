<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHealthCheck;

trait UpdateHealthCheckTrait
{
    /**
     * @param UpdateHealthCheckRequest $args
     * @return UpdateHealthCheckResponse
     */
    public function updateHealthCheck(UpdateHealthCheckRequest $args)
    {
        $result = parent::updateHealthCheck($args->toArray());
        return new UpdateHealthCheckResponse($result->toArray());
    }
}

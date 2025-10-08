<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheck;

trait CreateHealthCheckTrait
{
    /**
     * @param CreateHealthCheckRequest $args
     * @return CreateHealthCheckResponse
     */
    public function createHealthCheck(CreateHealthCheckRequest $args)
    {
        $result = parent::createHealthCheck($args->toArray());
        return new CreateHealthCheckResponse($result->toArray());
    }
}

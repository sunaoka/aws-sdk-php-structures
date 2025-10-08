<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheck;

trait GetHealthCheckTrait
{
    /**
     * @param GetHealthCheckRequest $args
     * @return GetHealthCheckResponse
     */
    public function getHealthCheck(GetHealthCheckRequest $args)
    {
        $result = parent::getHealthCheck($args->toArray());
        return new GetHealthCheckResponse($result->toArray());
    }
}

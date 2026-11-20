<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckSource;

trait GetHealthCheckSourceTrait
{
    /**
     * @param GetHealthCheckSourceRequest $args
     * @return GetHealthCheckSourceResponse
     */
    public function getHealthCheckSource(GetHealthCheckSourceRequest $args)
    {
        $result = parent::getHealthCheckSource($args->toArray());
        return new GetHealthCheckSourceResponse($result->toArray());
    }
}

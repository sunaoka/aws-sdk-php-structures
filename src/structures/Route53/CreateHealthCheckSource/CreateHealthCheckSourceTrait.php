<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheckSource;

trait CreateHealthCheckSourceTrait
{
    /**
     * @param CreateHealthCheckSourceRequest $args
     * @return CreateHealthCheckSourceResponse
     */
    public function createHealthCheckSource(CreateHealthCheckSourceRequest $args)
    {
        $result = parent::createHealthCheckSource($args->toArray());
        return new CreateHealthCheckSourceResponse($result->toArray());
    }
}

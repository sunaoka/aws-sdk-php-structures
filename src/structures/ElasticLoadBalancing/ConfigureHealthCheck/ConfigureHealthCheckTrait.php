<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ConfigureHealthCheck;

trait ConfigureHealthCheckTrait
{
    /**
     * @param ConfigureHealthCheckRequest $args
     * @return ConfigureHealthCheckResponse
     */
    public function configureHealthCheck(ConfigureHealthCheckRequest $args)
    {
        $result = parent::configureHealthCheck($args->toArray());
        return new ConfigureHealthCheckResponse($result->toArray());
    }
}

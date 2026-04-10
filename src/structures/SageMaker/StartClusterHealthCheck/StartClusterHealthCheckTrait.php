<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartClusterHealthCheck;

trait StartClusterHealthCheckTrait
{
    /**
     * @param StartClusterHealthCheckRequest $args
     * @return StartClusterHealthCheckResponse
     */
    public function startClusterHealthCheck(StartClusterHealthCheckRequest $args)
    {
        $result = parent::startClusterHealthCheck($args->toArray());
        return new StartClusterHealthCheckResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteHealthCheck;

trait DeleteHealthCheckTrait
{
    /**
     * @param DeleteHealthCheckRequest $args
     * @return DeleteHealthCheckResponse
     */
    public function deleteHealthCheck(DeleteHealthCheckRequest $args)
    {
        $result = parent::deleteHealthCheck($args->toArray());
        return new DeleteHealthCheckResponse($result->toArray());
    }
}

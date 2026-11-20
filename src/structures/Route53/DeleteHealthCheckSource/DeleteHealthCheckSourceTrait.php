<?php

namespace Sunaoka\Aws\Structures\Route53\DeleteHealthCheckSource;

trait DeleteHealthCheckSourceTrait
{
    /**
     * @param DeleteHealthCheckSourceRequest $args
     * @return DeleteHealthCheckSourceResponse
     */
    public function deleteHealthCheckSource(DeleteHealthCheckSourceRequest $args)
    {
        $result = parent::deleteHealthCheckSource($args->toArray());
        return new DeleteHealthCheckSourceResponse($result->toArray());
    }
}

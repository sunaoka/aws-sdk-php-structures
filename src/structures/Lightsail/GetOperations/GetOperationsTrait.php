<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperations;

trait GetOperationsTrait
{
    /**
     * @param GetOperationsRequest $args
     * @return GetOperationsResponse
     */
    public function getOperations(GetOperationsRequest $args)
    {
        $result = parent::getOperations($args->toArray());
        return new GetOperationsResponse($result->toArray());
    }
}

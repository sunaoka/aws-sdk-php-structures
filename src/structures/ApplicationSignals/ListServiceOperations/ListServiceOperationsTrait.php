<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceOperations;

trait ListServiceOperationsTrait
{
    /**
     * @param ListServiceOperationsRequest $args
     * @return ListServiceOperationsResponse
     */
    public function listServiceOperations(ListServiceOperationsRequest $args)
    {
        $result = parent::listServiceOperations($args->toArray());
        return new ListServiceOperationsResponse($result->toArray());
    }
}

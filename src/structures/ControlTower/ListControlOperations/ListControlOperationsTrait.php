<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations;

trait ListControlOperationsTrait
{
    /**
     * @param ListControlOperationsRequest $args
     * @return ListControlOperationsResponse
     */
    public function listControlOperations(ListControlOperationsRequest $args)
    {
        $result = parent::listControlOperations($args->toArray());
        return new ListControlOperationsResponse($result->toArray());
    }
}

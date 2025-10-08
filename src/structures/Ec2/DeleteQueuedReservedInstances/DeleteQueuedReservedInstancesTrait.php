<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances;

trait DeleteQueuedReservedInstancesTrait
{
    /**
     * @param DeleteQueuedReservedInstancesRequest $args
     * @return DeleteQueuedReservedInstancesResponse
     */
    public function deleteQueuedReservedInstances(DeleteQueuedReservedInstancesRequest $args)
    {
        $result = parent::deleteQueuedReservedInstances($args->toArray());
        return new DeleteQueuedReservedInstancesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStackInstances;

trait DeleteStackInstancesTrait
{
    /**
     * @param DeleteStackInstancesRequest $args
     * @return DeleteStackInstancesResponse
     */
    public function deleteStackInstances(DeleteStackInstancesRequest $args)
    {
        $result = parent::deleteStackInstances($args->toArray());
        return new DeleteStackInstancesResponse($result->toArray());
    }
}

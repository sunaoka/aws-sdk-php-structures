<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsInstances;

trait ListAccessGrantsInstancesTrait
{
    /**
     * @param ListAccessGrantsInstancesRequest $args
     * @return ListAccessGrantsInstancesResponse
     */
    public function listAccessGrantsInstances(ListAccessGrantsInstancesRequest $args)
    {
        $result = parent::listAccessGrantsInstances($args->toArray());
        return new ListAccessGrantsInstancesResponse($result->toArray());
    }
}

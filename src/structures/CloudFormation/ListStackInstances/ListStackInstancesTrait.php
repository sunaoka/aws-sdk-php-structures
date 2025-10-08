<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances;

trait ListStackInstancesTrait
{
    /**
     * @param ListStackInstancesRequest $args
     * @return ListStackInstancesResponse
     */
    public function listStackInstances(ListStackInstancesRequest $args)
    {
        $result = parent::listStackInstances($args->toArray());
        return new ListStackInstancesResponse($result->toArray());
    }
}

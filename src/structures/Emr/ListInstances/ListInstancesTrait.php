<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstances;

trait ListInstancesTrait
{
    /**
     * @param ListInstancesRequest $args
     * @return ListInstancesResponse
     */
    public function listInstances(ListInstancesRequest $args)
    {
        $result = parent::listInstances($args->toArray());
        return new ListInstancesResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListTaskInstances;

trait ListTaskInstancesTrait
{
    /**
     * @param ListTaskInstancesRequest $args
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstances(ListTaskInstancesRequest $args)
    {
        $result = parent::listTaskInstances($args->toArray());
        return new ListTaskInstancesResponse($result->toArray());
    }
}

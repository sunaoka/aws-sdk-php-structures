<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionInstances;

trait ListSolFunctionInstancesTrait
{
    /**
     * @param ListSolFunctionInstancesRequest $args
     * @return ListSolFunctionInstancesResponse
     */
    public function listSolFunctionInstances(ListSolFunctionInstancesRequest $args)
    {
        $result = parent::listSolFunctionInstances($args->toArray());
        return new ListSolFunctionInstancesResponse($result->toArray());
    }
}

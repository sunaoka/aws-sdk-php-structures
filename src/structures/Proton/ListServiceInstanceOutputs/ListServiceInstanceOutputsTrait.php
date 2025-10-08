<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstanceOutputs;

trait ListServiceInstanceOutputsTrait
{
    /**
     * @param ListServiceInstanceOutputsRequest $args
     * @return ListServiceInstanceOutputsResponse
     */
    public function listServiceInstanceOutputs(ListServiceInstanceOutputsRequest $args)
    {
        $result = parent::listServiceInstanceOutputs($args->toArray());
        return new ListServiceInstanceOutputsResponse($result->toArray());
    }
}

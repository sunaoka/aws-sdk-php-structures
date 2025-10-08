<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentOutputs;

trait ListComponentOutputsTrait
{
    /**
     * @param ListComponentOutputsRequest $args
     * @return ListComponentOutputsResponse
     */
    public function listComponentOutputs(ListComponentOutputsRequest $args)
    {
        $result = parent::listComponentOutputs($args->toArray());
        return new ListComponentOutputsResponse($result->toArray());
    }
}

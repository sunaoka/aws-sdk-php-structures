<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterInputs;

trait ListRouterInputsTrait
{
    /**
     * @param ListRouterInputsRequest $args
     * @return ListRouterInputsResponse
     */
    public function listRouterInputs(ListRouterInputsRequest $args)
    {
        $result = parent::listRouterInputs($args->toArray());
        return new ListRouterInputsResponse($result->toArray());
    }
}

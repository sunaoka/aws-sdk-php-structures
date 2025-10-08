<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs;

trait ListFunctionEventInvokeConfigsTrait
{
    /**
     * @param ListFunctionEventInvokeConfigsRequest $args
     * @return ListFunctionEventInvokeConfigsResponse
     */
    public function listFunctionEventInvokeConfigs(ListFunctionEventInvokeConfigsRequest $args)
    {
        $result = parent::listFunctionEventInvokeConfigs($args->toArray());
        return new ListFunctionEventInvokeConfigsResponse($result->toArray());
    }
}

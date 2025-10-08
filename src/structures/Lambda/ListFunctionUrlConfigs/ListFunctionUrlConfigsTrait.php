<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionUrlConfigs;

trait ListFunctionUrlConfigsTrait
{
    /**
     * @param ListFunctionUrlConfigsRequest $args
     * @return ListFunctionUrlConfigsResponse
     */
    public function listFunctionUrlConfigs(ListFunctionUrlConfigsRequest $args)
    {
        $result = parent::listFunctionUrlConfigs($args->toArray());
        return new ListFunctionUrlConfigsResponse($result->toArray());
    }
}

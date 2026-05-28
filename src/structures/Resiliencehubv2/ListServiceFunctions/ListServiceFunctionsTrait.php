<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceFunctions;

trait ListServiceFunctionsTrait
{
    /**
     * @param ListServiceFunctionsRequest $args
     * @return ListServiceFunctionsResponse
     */
    public function listServiceFunctions(ListServiceFunctionsRequest $args)
    {
        $result = parent::listServiceFunctions($args->toArray());
        return new ListServiceFunctionsResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions;

trait ListFunctionsTrait
{
    /**
     * @param ListFunctionsRequest $args
     * @return ListFunctionsResponse
     */
    public function listFunctions(ListFunctionsRequest $args)
    {
        $result = parent::listFunctions($args->toArray());
        return new ListFunctionsResponse($result->toArray());
    }
}

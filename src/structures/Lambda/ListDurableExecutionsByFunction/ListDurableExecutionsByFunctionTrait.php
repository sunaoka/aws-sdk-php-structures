<?php

namespace Sunaoka\Aws\Structures\Lambda\ListDurableExecutionsByFunction;

trait ListDurableExecutionsByFunctionTrait
{
    /**
     * @param ListDurableExecutionsByFunctionRequest $args
     * @return ListDurableExecutionsByFunctionResponse
     */
    public function listDurableExecutionsByFunction(ListDurableExecutionsByFunctionRequest $args)
    {
        $result = parent::listDurableExecutionsByFunction($args->toArray());
        return new ListDurableExecutionsByFunctionResponse($result->toArray());
    }
}

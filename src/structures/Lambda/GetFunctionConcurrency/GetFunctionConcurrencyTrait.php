<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConcurrency;

trait GetFunctionConcurrencyTrait
{
    /**
     * @param GetFunctionConcurrencyRequest $args
     * @return GetFunctionConcurrencyResponse
     */
    public function getFunctionConcurrency(GetFunctionConcurrencyRequest $args)
    {
        $result = parent::getFunctionConcurrency($args->toArray());
        return new GetFunctionConcurrencyResponse($result->toArray());
    }
}

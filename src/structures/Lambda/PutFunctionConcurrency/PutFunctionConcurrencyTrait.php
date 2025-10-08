<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionConcurrency;

trait PutFunctionConcurrencyTrait
{
    /**
     * @param PutFunctionConcurrencyRequest $args
     * @return PutFunctionConcurrencyResponse
     */
    public function putFunctionConcurrency(PutFunctionConcurrencyRequest $args)
    {
        $result = parent::putFunctionConcurrency($args->toArray());
        return new PutFunctionConcurrencyResponse($result->toArray());
    }
}

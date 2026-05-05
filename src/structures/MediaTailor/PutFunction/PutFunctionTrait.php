<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction;

trait PutFunctionTrait
{
    /**
     * @param PutFunctionRequest $args
     * @return PutFunctionResponse
     */
    public function putFunction(PutFunctionRequest $args)
    {
        $result = parent::putFunction($args->toArray());
        return new PutFunctionResponse($result->toArray());
    }
}

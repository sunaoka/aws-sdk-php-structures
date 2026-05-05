<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetFunction;

trait GetFunctionTrait
{
    /**
     * @param GetFunctionRequest $args
     * @return GetFunctionResponse
     */
    public function getFunction(GetFunctionRequest $args)
    {
        $result = parent::getFunction($args->toArray());
        return new GetFunctionResponse($result->toArray());
    }
}

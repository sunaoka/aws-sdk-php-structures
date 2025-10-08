<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunction;

trait GetUserDefinedFunctionTrait
{
    /**
     * @param GetUserDefinedFunctionRequest $args
     * @return GetUserDefinedFunctionResponse
     */
    public function getUserDefinedFunction(GetUserDefinedFunctionRequest $args)
    {
        $result = parent::getUserDefinedFunction($args->toArray());
        return new GetUserDefinedFunctionResponse($result->toArray());
    }
}

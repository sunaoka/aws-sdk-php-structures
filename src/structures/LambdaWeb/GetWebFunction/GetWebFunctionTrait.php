<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunction;

trait GetWebFunctionTrait
{
    /**
     * @param GetWebFunctionRequest $args
     * @return GetWebFunctionResponse
     */
    public function getWebFunction(GetWebFunctionRequest $args)
    {
        $result = parent::getWebFunction($args->toArray());
        return new GetWebFunctionResponse($result->toArray());
    }
}

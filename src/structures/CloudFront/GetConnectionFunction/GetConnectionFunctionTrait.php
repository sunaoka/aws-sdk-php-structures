<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionFunction;

trait GetConnectionFunctionTrait
{
    /**
     * @param GetConnectionFunctionRequest $args
     * @return GetConnectionFunctionResponse
     */
    public function getConnectionFunction(GetConnectionFunctionRequest $args)
    {
        $result = parent::getConnectionFunction($args->toArray());
        return new GetConnectionFunctionResponse($result->toArray());
    }
}

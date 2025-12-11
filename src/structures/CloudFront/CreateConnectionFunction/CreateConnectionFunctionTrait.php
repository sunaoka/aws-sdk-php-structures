<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateConnectionFunction;

trait CreateConnectionFunctionTrait
{
    /**
     * @param CreateConnectionFunctionRequest $args
     * @return CreateConnectionFunctionResponse
     */
    public function createConnectionFunction(CreateConnectionFunctionRequest $args)
    {
        $result = parent::createConnectionFunction($args->toArray());
        return new CreateConnectionFunctionResponse($result->toArray());
    }
}

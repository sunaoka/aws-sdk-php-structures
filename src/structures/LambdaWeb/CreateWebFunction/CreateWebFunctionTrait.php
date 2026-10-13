<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction;

trait CreateWebFunctionTrait
{
    /**
     * @param CreateWebFunctionRequest $args
     * @return CreateWebFunctionResponse
     */
    public function createWebFunction(CreateWebFunctionRequest $args)
    {
        $result = parent::createWebFunction($args->toArray());
        return new CreateWebFunctionResponse($result->toArray());
    }
}

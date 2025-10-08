<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction;

trait CreateFunctionTrait
{
    /**
     * @param CreateFunctionRequest $args
     * @return CreateFunctionResponse
     */
    public function createFunction(CreateFunctionRequest $args)
    {
        $result = parent::createFunction($args->toArray());
        return new CreateFunctionResponse($result->toArray());
    }
}

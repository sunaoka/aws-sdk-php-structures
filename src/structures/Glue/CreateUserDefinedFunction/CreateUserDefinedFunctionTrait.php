<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUserDefinedFunction;

trait CreateUserDefinedFunctionTrait
{
    /**
     * @param CreateUserDefinedFunctionRequest $args
     * @return CreateUserDefinedFunctionResponse
     */
    public function createUserDefinedFunction(CreateUserDefinedFunctionRequest $args)
    {
        $result = parent::createUserDefinedFunction($args->toArray());
        return new CreateUserDefinedFunctionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUserDefinedFunction;

trait UpdateUserDefinedFunctionTrait
{
    /**
     * @param UpdateUserDefinedFunctionRequest $args
     * @return UpdateUserDefinedFunctionResponse
     */
    public function updateUserDefinedFunction(UpdateUserDefinedFunctionRequest $args)
    {
        $result = parent::updateUserDefinedFunction($args->toArray());
        return new UpdateUserDefinedFunctionResponse($result->toArray());
    }
}

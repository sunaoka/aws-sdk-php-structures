<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteUserDefinedFunction;

trait DeleteUserDefinedFunctionTrait
{
    /**
     * @param DeleteUserDefinedFunctionRequest $args
     * @return DeleteUserDefinedFunctionResponse
     */
    public function deleteUserDefinedFunction(DeleteUserDefinedFunctionRequest $args)
    {
        $result = parent::deleteUserDefinedFunction($args->toArray());
        return new DeleteUserDefinedFunctionResponse($result->toArray());
    }
}

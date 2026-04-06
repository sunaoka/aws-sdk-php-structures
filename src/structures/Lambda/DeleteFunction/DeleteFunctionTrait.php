<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteFunction;

trait DeleteFunctionTrait
{
    /**
     * @param DeleteFunctionRequest $args
     * @return DeleteFunctionResponse
     */
    public function deleteFunction(DeleteFunctionRequest $args)
    {
        $result = parent::deleteFunction($args->toArray());
        return new DeleteFunctionResponse($result->toArray());
    }
}

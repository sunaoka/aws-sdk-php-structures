<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteServiceFunction;

trait DeleteServiceFunctionTrait
{
    /**
     * @param DeleteServiceFunctionRequest $args
     * @return DeleteServiceFunctionResponse
     */
    public function deleteServiceFunction(DeleteServiceFunctionRequest $args)
    {
        $result = parent::deleteServiceFunction($args->toArray());
        return new DeleteServiceFunctionResponse($result->toArray());
    }
}

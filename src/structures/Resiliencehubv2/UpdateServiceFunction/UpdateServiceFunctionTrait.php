<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateServiceFunction;

trait UpdateServiceFunctionTrait
{
    /**
     * @param UpdateServiceFunctionRequest $args
     * @return UpdateServiceFunctionResponse
     */
    public function updateServiceFunction(UpdateServiceFunctionRequest $args)
    {
        $result = parent::updateServiceFunction($args->toArray());
        return new UpdateServiceFunctionResponse($result->toArray());
    }
}

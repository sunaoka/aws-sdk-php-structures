<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateConnectionFunction;

trait UpdateConnectionFunctionTrait
{
    /**
     * @param UpdateConnectionFunctionRequest $args
     * @return UpdateConnectionFunctionResponse
     */
    public function updateConnectionFunction(UpdateConnectionFunctionRequest $args)
    {
        $result = parent::updateConnectionFunction($args->toArray());
        return new UpdateConnectionFunctionResponse($result->toArray());
    }
}

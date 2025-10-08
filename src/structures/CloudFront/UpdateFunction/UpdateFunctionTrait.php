<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFunction;

trait UpdateFunctionTrait
{
    /**
     * @param UpdateFunctionRequest $args
     * @return UpdateFunctionResponse
     */
    public function updateFunction(UpdateFunctionRequest $args)
    {
        $result = parent::updateFunction($args->toArray());
        return new UpdateFunctionResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperationsForResource;

trait GetOperationsForResourceTrait
{
    /**
     * @param GetOperationsForResourceRequest $args
     * @return GetOperationsForResourceResponse
     */
    public function getOperationsForResource(GetOperationsForResourceRequest $args)
    {
        $result = parent::getOperationsForResource($args->toArray());
        return new GetOperationsForResourceResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\GetManagedResource;

trait GetManagedResourceTrait
{
    /**
     * @param GetManagedResourceRequest $args
     * @return GetManagedResourceResponse
     */
    public function getManagedResource(GetManagedResourceRequest $args)
    {
        $result = parent::getManagedResource($args->toArray());
        return new GetManagedResourceResponse($result->toArray());
    }
}

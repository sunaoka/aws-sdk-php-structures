<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateConsumableResource;

trait UpdateConsumableResourceTrait
{
    /**
     * @param UpdateConsumableResourceRequest $args
     * @return UpdateConsumableResourceResponse
     */
    public function updateConsumableResource(UpdateConsumableResourceRequest $args)
    {
        $result = parent::updateConsumableResource($args->toArray());
        return new UpdateConsumableResourceResponse($result->toArray());
    }
}

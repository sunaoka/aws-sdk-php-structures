<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteConsumableResource;

trait DeleteConsumableResourceTrait
{
    /**
     * @param DeleteConsumableResourceRequest $args
     * @return DeleteConsumableResourceResponse
     */
    public function deleteConsumableResource(DeleteConsumableResourceRequest $args)
    {
        $result = parent::deleteConsumableResource($args->toArray());
        return new DeleteConsumableResourceResponse($result->toArray());
    }
}

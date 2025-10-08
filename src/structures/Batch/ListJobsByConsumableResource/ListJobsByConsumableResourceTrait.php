<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobsByConsumableResource;

trait ListJobsByConsumableResourceTrait
{
    /**
     * @param ListJobsByConsumableResourceRequest $args
     * @return ListJobsByConsumableResourceResponse
     */
    public function listJobsByConsumableResource(ListJobsByConsumableResourceRequest $args)
    {
        $result = parent::listJobsByConsumableResource($args->toArray());
        return new ListJobsByConsumableResourceResponse($result->toArray());
    }
}

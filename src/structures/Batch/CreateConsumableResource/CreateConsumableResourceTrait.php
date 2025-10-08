<?php

namespace Sunaoka\Aws\Structures\Batch\CreateConsumableResource;

trait CreateConsumableResourceTrait
{
    /**
     * @param CreateConsumableResourceRequest $args
     * @return CreateConsumableResourceResponse
     */
    public function createConsumableResource(CreateConsumableResourceRequest $args)
    {
        $result = parent::createConsumableResource($args->toArray());
        return new CreateConsumableResourceResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection;

trait UpdateResourceCollectionTrait
{
    /**
     * @param UpdateResourceCollectionRequest $args
     * @return UpdateResourceCollectionResponse
     */
    public function updateResourceCollection(UpdateResourceCollectionRequest $args)
    {
        $result = parent::updateResourceCollection($args->toArray());
        return new UpdateResourceCollectionResponse($result->toArray());
    }
}

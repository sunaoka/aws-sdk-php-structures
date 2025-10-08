<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection;

trait GetResourceCollectionTrait
{
    /**
     * @param GetResourceCollectionRequest $args
     * @return GetResourceCollectionResponse
     */
    public function getResourceCollection(GetResourceCollectionRequest $args)
    {
        $result = parent::getResourceCollection($args->toArray());
        return new GetResourceCollectionResponse($result->toArray());
    }
}

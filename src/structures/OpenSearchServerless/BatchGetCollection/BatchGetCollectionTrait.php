<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection;

trait BatchGetCollectionTrait
{
    /**
     * @param BatchGetCollectionRequest $args
     * @return BatchGetCollectionResponse
     */
    public function batchGetCollection(BatchGetCollectionRequest $args)
    {
        $result = parent::batchGetCollection($args->toArray());
        return new BatchGetCollectionResponse($result->toArray());
    }
}

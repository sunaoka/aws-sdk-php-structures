<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollectionGroup;

trait BatchGetCollectionGroupTrait
{
    /**
     * @param BatchGetCollectionGroupRequest $args
     * @return BatchGetCollectionGroupResponse
     */
    public function batchGetCollectionGroup(BatchGetCollectionGroupRequest $args)
    {
        $result = parent::batchGetCollectionGroup($args->toArray());
        return new BatchGetCollectionGroupResponse($result->toArray());
    }
}

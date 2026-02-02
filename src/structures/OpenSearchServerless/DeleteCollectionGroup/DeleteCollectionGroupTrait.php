<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteCollectionGroup;

trait DeleteCollectionGroupTrait
{
    /**
     * @param DeleteCollectionGroupRequest $args
     * @return DeleteCollectionGroupResponse
     */
    public function deleteCollectionGroup(DeleteCollectionGroupRequest $args)
    {
        $result = parent::deleteCollectionGroup($args->toArray());
        return new DeleteCollectionGroupResponse($result->toArray());
    }
}

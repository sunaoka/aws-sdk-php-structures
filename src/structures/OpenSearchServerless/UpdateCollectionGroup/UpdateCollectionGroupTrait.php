<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollectionGroup;

trait UpdateCollectionGroupTrait
{
    /**
     * @param UpdateCollectionGroupRequest $args
     * @return UpdateCollectionGroupResponse
     */
    public function updateCollectionGroup(UpdateCollectionGroupRequest $args)
    {
        $result = parent::updateCollectionGroup($args->toArray());
        return new UpdateCollectionGroupResponse($result->toArray());
    }
}

<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollectionGroup;

trait CreateCollectionGroupTrait
{
    /**
     * @param CreateCollectionGroupRequest $args
     * @return CreateCollectionGroupResponse
     */
    public function createCollectionGroup(CreateCollectionGroupRequest $args)
    {
        $result = parent::createCollectionGroup($args->toArray());
        return new CreateCollectionGroupResponse($result->toArray());
    }
}

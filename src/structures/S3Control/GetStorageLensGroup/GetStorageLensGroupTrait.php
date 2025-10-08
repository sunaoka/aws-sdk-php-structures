<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensGroup;

trait GetStorageLensGroupTrait
{
    /**
     * @param GetStorageLensGroupRequest $args
     * @return GetStorageLensGroupResponse
     */
    public function getStorageLensGroup(GetStorageLensGroupRequest $args)
    {
        $result = parent::getStorageLensGroup($args->toArray());
        return new GetStorageLensGroupResponse($result->toArray());
    }
}

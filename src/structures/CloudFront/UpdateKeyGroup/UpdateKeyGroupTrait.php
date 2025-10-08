<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateKeyGroup;

trait UpdateKeyGroupTrait
{
    /**
     * @param UpdateKeyGroupRequest $args
     * @return UpdateKeyGroupResponse
     */
    public function updateKeyGroup(UpdateKeyGroupRequest $args)
    {
        $result = parent::updateKeyGroup($args->toArray());
        return new UpdateKeyGroupResponse($result->toArray());
    }
}

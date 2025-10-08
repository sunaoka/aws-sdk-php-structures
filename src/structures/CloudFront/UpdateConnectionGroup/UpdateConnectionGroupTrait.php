<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateConnectionGroup;

trait UpdateConnectionGroupTrait
{
    /**
     * @param UpdateConnectionGroupRequest $args
     * @return UpdateConnectionGroupResponse
     */
    public function updateConnectionGroup(UpdateConnectionGroupRequest $args)
    {
        $result = parent::updateConnectionGroup($args->toArray());
        return new UpdateConnectionGroupResponse($result->toArray());
    }
}

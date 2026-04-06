<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionGroup;

trait GetConnectionGroupTrait
{
    /**
     * @param GetConnectionGroupRequest $args
     * @return GetConnectionGroupResponse
     */
    public function getConnectionGroup(GetConnectionGroupRequest $args)
    {
        $result = parent::getConnectionGroup($args->toArray());
        return new GetConnectionGroupResponse($result->toArray());
    }
}

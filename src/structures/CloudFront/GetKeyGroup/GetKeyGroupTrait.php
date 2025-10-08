<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetKeyGroup;

trait GetKeyGroupTrait
{
    /**
     * @param GetKeyGroupRequest $args
     * @return GetKeyGroupResponse
     */
    public function getKeyGroup(GetKeyGroupRequest $args)
    {
        $result = parent::getKeyGroup($args->toArray());
        return new GetKeyGroupResponse($result->toArray());
    }
}

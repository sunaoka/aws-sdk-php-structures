<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupId;

trait GetGroupIdTrait
{
    /**
     * @param GetGroupIdRequest $args
     * @return GetGroupIdResponse
     */
    public function getGroupId(GetGroupIdRequest $args)
    {
        $result = parent::getGroupId($args->toArray());
        return new GetGroupIdResponse($result->toArray());
    }
}

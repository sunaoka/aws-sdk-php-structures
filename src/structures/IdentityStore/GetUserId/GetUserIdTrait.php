<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetUserId;

trait GetUserIdTrait
{
    /**
     * @param GetUserIdRequest $args
     * @return GetUserIdResponse
     */
    public function getUserId(GetUserIdRequest $args)
    {
        $result = parent::getUserId($args->toArray());
        return new GetUserIdResponse($result->toArray());
    }
}

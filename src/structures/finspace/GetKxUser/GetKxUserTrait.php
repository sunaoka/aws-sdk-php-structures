<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxUser;

trait GetKxUserTrait
{
    /**
     * @param GetKxUserRequest $args
     * @return GetKxUserResponse
     */
    public function getKxUser(GetKxUserRequest $args)
    {
        $result = parent::getKxUser($args->toArray());
        return new GetKxUserResponse($result->toArray());
    }
}

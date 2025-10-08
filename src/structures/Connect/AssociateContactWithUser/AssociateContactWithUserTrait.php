<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateContactWithUser;

trait AssociateContactWithUserTrait
{
    /**
     * @param AssociateContactWithUserRequest $args
     * @return AssociateContactWithUserResponse
     */
    public function associateContactWithUser(AssociateContactWithUserRequest $args)
    {
        $result = parent::associateContactWithUser($args->toArray());
        return new AssociateContactWithUserResponse($result->toArray());
    }
}

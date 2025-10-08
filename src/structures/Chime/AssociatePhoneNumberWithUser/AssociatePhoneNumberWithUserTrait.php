<?php

namespace Sunaoka\Aws\Structures\Chime\AssociatePhoneNumberWithUser;

trait AssociatePhoneNumberWithUserTrait
{
    /**
     * @param AssociatePhoneNumberWithUserRequest $args
     * @return AssociatePhoneNumberWithUserResponse
     */
    public function associatePhoneNumberWithUser(AssociatePhoneNumberWithUserRequest $args)
    {
        $result = parent::associatePhoneNumberWithUser($args->toArray());
        return new AssociatePhoneNumberWithUserResponse($result->toArray());
    }
}

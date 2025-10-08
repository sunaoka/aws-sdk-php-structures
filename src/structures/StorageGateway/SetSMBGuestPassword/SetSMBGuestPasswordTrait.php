<?php

namespace Sunaoka\Aws\Structures\StorageGateway\SetSMBGuestPassword;

trait SetSMBGuestPasswordTrait
{
    /**
     * @param SetSMBGuestPasswordRequest $args
     * @return SetSMBGuestPasswordResponse
     */
    public function setSMBGuestPassword(SetSMBGuestPasswordRequest $args)
    {
        $result = parent::setSMBGuestPassword($args->toArray());
        return new SetSMBGuestPasswordResponse($result->toArray());
    }
}

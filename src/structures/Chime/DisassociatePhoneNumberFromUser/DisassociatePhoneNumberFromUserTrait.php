<?php

namespace Sunaoka\Aws\Structures\Chime\DisassociatePhoneNumberFromUser;

trait DisassociatePhoneNumberFromUserTrait
{
    /**
     * @param DisassociatePhoneNumberFromUserRequest $args
     * @return DisassociatePhoneNumberFromUserResponse
     */
    public function disassociatePhoneNumberFromUser(DisassociatePhoneNumberFromUserRequest $args)
    {
        $result = parent::disassociatePhoneNumberFromUser($args->toArray());
        return new DisassociatePhoneNumberFromUserResponse($result->toArray());
    }
}

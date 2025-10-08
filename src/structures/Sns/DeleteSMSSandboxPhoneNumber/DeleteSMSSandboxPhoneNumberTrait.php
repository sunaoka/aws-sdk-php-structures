<?php

namespace Sunaoka\Aws\Structures\Sns\DeleteSMSSandboxPhoneNumber;

trait DeleteSMSSandboxPhoneNumberTrait
{
    /**
     * @param DeleteSMSSandboxPhoneNumberRequest $args
     * @return DeleteSMSSandboxPhoneNumberResponse
     */
    public function deleteSMSSandboxPhoneNumber(DeleteSMSSandboxPhoneNumberRequest $args)
    {
        $result = parent::deleteSMSSandboxPhoneNumber($args->toArray());
        return new DeleteSMSSandboxPhoneNumberResponse($result->toArray());
    }
}

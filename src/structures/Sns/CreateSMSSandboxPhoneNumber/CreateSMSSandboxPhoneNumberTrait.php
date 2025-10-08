<?php

namespace Sunaoka\Aws\Structures\Sns\CreateSMSSandboxPhoneNumber;

trait CreateSMSSandboxPhoneNumberTrait
{
    /**
     * @param CreateSMSSandboxPhoneNumberRequest $args
     * @return CreateSMSSandboxPhoneNumberResponse
     */
    public function createSMSSandboxPhoneNumber(CreateSMSSandboxPhoneNumberRequest $args)
    {
        $result = parent::createSMSSandboxPhoneNumber($args->toArray());
        return new CreateSMSSandboxPhoneNumberResponse($result->toArray());
    }
}

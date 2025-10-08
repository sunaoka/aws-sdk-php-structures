<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount;

trait RegisterAccountTrait
{
    /**
     * @param RegisterAccountRequest $args
     * @return RegisterAccountResponse
     */
    public function registerAccount(RegisterAccountRequest $args)
    {
        $result = parent::registerAccount($args->toArray());
        return new RegisterAccountResponse($result->toArray());
    }
}

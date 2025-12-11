<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateProgramManagementAccount;

trait CreateProgramManagementAccountTrait
{
    /**
     * @param CreateProgramManagementAccountRequest $args
     * @return CreateProgramManagementAccountResponse
     */
    public function createProgramManagementAccount(CreateProgramManagementAccountRequest $args)
    {
        $result = parent::createProgramManagementAccount($args->toArray());
        return new CreateProgramManagementAccountResponse($result->toArray());
    }
}

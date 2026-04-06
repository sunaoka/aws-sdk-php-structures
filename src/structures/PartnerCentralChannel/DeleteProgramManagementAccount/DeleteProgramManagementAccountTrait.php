<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\DeleteProgramManagementAccount;

trait DeleteProgramManagementAccountTrait
{
    /**
     * @param DeleteProgramManagementAccountRequest $args
     * @return DeleteProgramManagementAccountResponse
     */
    public function deleteProgramManagementAccount(DeleteProgramManagementAccountRequest $args)
    {
        $result = parent::deleteProgramManagementAccount($args->toArray());
        return new DeleteProgramManagementAccountResponse($result->toArray());
    }
}

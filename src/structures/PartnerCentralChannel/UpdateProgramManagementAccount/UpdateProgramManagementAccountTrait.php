<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateProgramManagementAccount;

trait UpdateProgramManagementAccountTrait
{
    /**
     * @param UpdateProgramManagementAccountRequest $args
     * @return UpdateProgramManagementAccountResponse
     */
    public function updateProgramManagementAccount(UpdateProgramManagementAccountRequest $args)
    {
        $result = parent::updateProgramManagementAccount($args->toArray());
        return new UpdateProgramManagementAccountResponse($result->toArray());
    }
}

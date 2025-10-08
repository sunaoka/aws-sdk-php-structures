<?php

namespace Sunaoka\Aws\Structures\Backup\AssociateBackupVaultMpaApprovalTeam;

trait AssociateBackupVaultMpaApprovalTeamTrait
{
    /**
     * @param AssociateBackupVaultMpaApprovalTeamRequest $args
     * @return void
     */
    public function associateBackupVaultMpaApprovalTeam(AssociateBackupVaultMpaApprovalTeamRequest $args)
    {
        parent::associateBackupVaultMpaApprovalTeam($args->toArray());
    }
}

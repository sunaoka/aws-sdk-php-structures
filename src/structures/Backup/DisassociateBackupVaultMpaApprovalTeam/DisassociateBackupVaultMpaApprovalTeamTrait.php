<?php

namespace Sunaoka\Aws\Structures\Backup\DisassociateBackupVaultMpaApprovalTeam;

trait DisassociateBackupVaultMpaApprovalTeamTrait
{
    /**
     * @param DisassociateBackupVaultMpaApprovalTeamRequest $args
     * @return void
     */
    public function disassociateBackupVaultMpaApprovalTeam(DisassociateBackupVaultMpaApprovalTeamRequest $args)
    {
        parent::disassociateBackupVaultMpaApprovalTeam($args->toArray());
    }
}

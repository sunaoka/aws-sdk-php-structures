<?php

namespace Sunaoka\Aws\Structures\Backup\DisassociateBackupVaultMpaApprovalTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string|null $RequesterComment
 */
class DisassociateBackupVaultMpaApprovalTeamRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

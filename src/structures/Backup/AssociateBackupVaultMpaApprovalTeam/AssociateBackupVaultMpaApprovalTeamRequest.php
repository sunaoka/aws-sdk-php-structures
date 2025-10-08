<?php

namespace Sunaoka\Aws\Structures\Backup\AssociateBackupVaultMpaApprovalTeam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 * @property string $MpaApprovalTeamArn
 * @property string|null $RequesterComment
 */
class AssociateBackupVaultMpaApprovalTeamRequest extends Request
{
    /**
     * @param array{
     *     BackupVaultName: string,
     *     MpaApprovalTeamArn: string,
     *     RequesterComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

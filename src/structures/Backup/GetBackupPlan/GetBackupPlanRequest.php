<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string $VersionId
 */
class GetBackupPlanRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

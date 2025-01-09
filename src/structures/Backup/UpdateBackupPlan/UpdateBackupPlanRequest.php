<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property Shapes\BackupPlanInput $BackupPlan
 */
class UpdateBackupPlanRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     BackupPlan: Shapes\BackupPlanInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

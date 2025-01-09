<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 */
class DeleteBackupPlanRequest extends Request
{
    /**
     * @param array{BackupPlanId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

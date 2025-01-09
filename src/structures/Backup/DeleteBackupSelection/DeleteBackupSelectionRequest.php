<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string $SelectionId
 */
class DeleteBackupSelectionRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     SelectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

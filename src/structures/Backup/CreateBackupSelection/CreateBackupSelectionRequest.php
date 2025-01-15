<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupSelection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property Shapes\BackupSelection $BackupSelection
 * @property string|null $CreatorRequestId
 */
class CreateBackupSelectionRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     BackupSelection: Shapes\BackupSelection,
     *     CreatorRequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

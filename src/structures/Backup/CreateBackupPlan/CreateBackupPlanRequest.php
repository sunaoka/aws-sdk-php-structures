<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BackupPlanInput $BackupPlan
 * @property array<string, string> $BackupPlanTags
 * @property string $CreatorRequestId
 */
class CreateBackupPlanRequest extends Request
{
    /**
     * @param array{
     *     BackupPlan: Shapes\BackupPlanInput,
     *     BackupPlanTags?: array<string, string>,
     *     CreatorRequestId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

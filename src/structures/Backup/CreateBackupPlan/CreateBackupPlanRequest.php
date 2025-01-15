<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BackupPlanInput $BackupPlan
 * @property array<string, string>|null $BackupPlanTags
 * @property string|null $CreatorRequestId
 */
class CreateBackupPlanRequest extends Request
{
    /**
     * @param array{
     *     BackupPlan: Shapes\BackupPlanInput,
     *     BackupPlanTags?: array<string, string>|null,
     *     CreatorRequestId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

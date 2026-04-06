<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupPlanId
 * @property string|null $VersionId
 * @property int<0, 10>|null $MaxScheduledRunsPreview
 */
class GetBackupPlanRequest extends Request
{
    /**
     * @param array{
     *     BackupPlanId: string,
     *     VersionId?: string|null,
     *     MaxScheduledRunsPreview?: int<0, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

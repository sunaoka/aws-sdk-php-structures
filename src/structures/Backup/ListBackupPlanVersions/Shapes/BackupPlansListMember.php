<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanArn
 * @property string $BackupPlanId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $DeletionDate
 * @property string $VersionId
 * @property string $BackupPlanName
 * @property string $CreatorRequestId
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property list<AdvancedBackupSetting> $AdvancedBackupSettings
 */
class BackupPlansListMember extends Shape
{
    /**
     * @param array{
     *     BackupPlanArn?: string,
     *     BackupPlanId?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     DeletionDate?: \Aws\Api\DateTimeResult,
     *     VersionId?: string,
     *     BackupPlanName?: string,
     *     CreatorRequestId?: string,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult,
     *     AdvancedBackupSettings?: list<AdvancedBackupSetting>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

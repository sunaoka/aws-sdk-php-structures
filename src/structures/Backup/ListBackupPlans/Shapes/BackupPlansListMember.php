<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupPlanArn
 * @property string|null $BackupPlanId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $DeletionDate
 * @property string|null $VersionId
 * @property string|null $BackupPlanName
 * @property string|null $CreatorRequestId
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property list<AdvancedBackupSetting>|null $AdvancedBackupSettings
 */
class BackupPlansListMember extends Shape
{
    /**
     * @param array{
     *     BackupPlanArn?: string|null,
     *     BackupPlanId?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     DeletionDate?: \Aws\Api\DateTimeResult|null,
     *     VersionId?: string|null,
     *     BackupPlanName?: string|null,
     *     CreatorRequestId?: string|null,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     AdvancedBackupSettings?: list<AdvancedBackupSetting>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

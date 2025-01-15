<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsBackupBackupPlanBackupPlanDetails|null $BackupPlan
 * @property string|null $BackupPlanArn
 * @property string|null $BackupPlanId
 * @property string|null $VersionId
 */
class AwsBackupBackupPlanDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlan?: AwsBackupBackupPlanBackupPlanDetails|null,
     *     BackupPlanArn?: string|null,
     *     BackupPlanId?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

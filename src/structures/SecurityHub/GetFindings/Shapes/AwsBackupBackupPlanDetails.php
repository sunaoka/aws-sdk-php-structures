<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsBackupBackupPlanBackupPlanDetails $BackupPlan
 * @property string $BackupPlanArn
 * @property string $BackupPlanId
 * @property string $VersionId
 */
class AwsBackupBackupPlanDetails extends Shape
{
    /**
     * @param array{
     *     BackupPlan?: AwsBackupBackupPlanBackupPlanDetails,
     *     BackupPlanArn?: string,
     *     BackupPlanId?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

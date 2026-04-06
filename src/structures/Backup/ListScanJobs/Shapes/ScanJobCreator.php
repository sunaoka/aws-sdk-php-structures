<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupPlanArn
 * @property string $BackupPlanId
 * @property string $BackupPlanVersion
 * @property string $BackupRuleId
 */
class ScanJobCreator extends Shape
{
    /**
     * @param array{
     *     BackupPlanArn: string,
     *     BackupPlanId: string,
     *     BackupPlanVersion: string,
     *     BackupRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

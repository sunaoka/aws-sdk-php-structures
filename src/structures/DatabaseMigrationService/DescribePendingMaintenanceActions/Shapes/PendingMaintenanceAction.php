<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribePendingMaintenanceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Action
 * @property \Aws\Api\DateTimeResult $AutoAppliedAfterDate
 * @property \Aws\Api\DateTimeResult $ForcedApplyDate
 * @property string $OptInStatus
 * @property \Aws\Api\DateTimeResult $CurrentApplyDate
 * @property string $Description
 */
class PendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     Action?: string,
     *     AutoAppliedAfterDate?: \Aws\Api\DateTimeResult,
     *     ForcedApplyDate?: \Aws\Api\DateTimeResult,
     *     OptInStatus?: string,
     *     CurrentApplyDate?: \Aws\Api\DateTimeResult,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

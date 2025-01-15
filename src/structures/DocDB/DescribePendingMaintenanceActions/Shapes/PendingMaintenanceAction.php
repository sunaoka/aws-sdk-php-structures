<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribePendingMaintenanceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Action
 * @property \Aws\Api\DateTimeResult|null $AutoAppliedAfterDate
 * @property \Aws\Api\DateTimeResult|null $ForcedApplyDate
 * @property string|null $OptInStatus
 * @property \Aws\Api\DateTimeResult|null $CurrentApplyDate
 * @property string|null $Description
 */
class PendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     Action?: string|null,
     *     AutoAppliedAfterDate?: \Aws\Api\DateTimeResult|null,
     *     ForcedApplyDate?: \Aws\Api\DateTimeResult|null,
     *     OptInStatus?: string|null,
     *     CurrentApplyDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

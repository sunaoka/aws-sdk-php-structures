<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalFindingsCount
 * @property int $failedFindingsCount
 * @property int $succeededFindingsCount
 * @property int $skippedFindingsCount
 * @property int $canceledFindingsCount
 */
class TaskStatisticsForAuditCheck extends Shape
{
    /**
     * @param array{
     *     totalFindingsCount?: int,
     *     failedFindingsCount?: int,
     *     succeededFindingsCount?: int,
     *     skippedFindingsCount?: int,
     *     canceledFindingsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

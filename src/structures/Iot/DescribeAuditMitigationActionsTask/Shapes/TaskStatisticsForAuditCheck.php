<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalFindingsCount
 * @property int|null $failedFindingsCount
 * @property int|null $succeededFindingsCount
 * @property int|null $skippedFindingsCount
 * @property int|null $canceledFindingsCount
 */
class TaskStatisticsForAuditCheck extends Shape
{
    /**
     * @param array{
     *     totalFindingsCount?: int|null,
     *     failedFindingsCount?: int|null,
     *     succeededFindingsCount?: int|null,
     *     skippedFindingsCount?: int|null,
     *     canceledFindingsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

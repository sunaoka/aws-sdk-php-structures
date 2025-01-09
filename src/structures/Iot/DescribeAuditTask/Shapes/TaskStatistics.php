<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $totalChecks
 * @property int $inProgressChecks
 * @property int $waitingForDataCollectionChecks
 * @property int $compliantChecks
 * @property int $nonCompliantChecks
 * @property int $failedChecks
 * @property int $canceledChecks
 */
class TaskStatistics extends Shape
{
    /**
     * @param array{
     *     totalChecks?: int,
     *     inProgressChecks?: int,
     *     waitingForDataCollectionChecks?: int,
     *     compliantChecks?: int,
     *     nonCompliantChecks?: int,
     *     failedChecks?: int,
     *     canceledChecks?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

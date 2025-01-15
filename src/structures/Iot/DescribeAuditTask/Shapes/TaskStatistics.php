<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalChecks
 * @property int|null $inProgressChecks
 * @property int|null $waitingForDataCollectionChecks
 * @property int|null $compliantChecks
 * @property int|null $nonCompliantChecks
 * @property int|null $failedChecks
 * @property int|null $canceledChecks
 */
class TaskStatistics extends Shape
{
    /**
     * @param array{
     *     totalChecks?: int|null,
     *     inProgressChecks?: int|null,
     *     waitingForDataCollectionChecks?: int|null,
     *     compliantChecks?: int|null,
     *     nonCompliantChecks?: int|null,
     *     failedChecks?: int|null,
     *     canceledChecks?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

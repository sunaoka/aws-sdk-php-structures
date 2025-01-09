<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $total
 * @property array<string, int> $statusCounts
 * @property int $durationInNanoSeconds
 */
class TestReportSummary extends Shape
{
    /**
     * @param array{
     *     total: int,
     *     statusCounts: array<string, int>,
     *     durationInNanoSeconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

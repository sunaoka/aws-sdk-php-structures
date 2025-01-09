<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $average
 * @property string $max
 * @property string $min
 */
class ReportGroupTrendStats extends Shape
{
    /**
     * @param array{
     *     average?: string,
     *     max?: string,
     *     min?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

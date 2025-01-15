<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $average
 * @property string|null $max
 * @property string|null $min
 */
class ReportGroupTrendStats extends Shape
{
    /**
     * @param array{
     *     average?: string|null,
     *     max?: string|null,
     *     min?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

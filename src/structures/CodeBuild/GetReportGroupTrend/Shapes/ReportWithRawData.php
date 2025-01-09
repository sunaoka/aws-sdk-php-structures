<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reportArn
 * @property string $data
 */
class ReportWithRawData extends Shape
{
    /**
     * @param array{
     *     reportArn?: string,
     *     data?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

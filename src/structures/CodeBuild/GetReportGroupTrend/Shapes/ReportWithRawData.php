<?php

namespace Sunaoka\Aws\Structures\CodeBuild\GetReportGroupTrend\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reportArn
 * @property string|null $data
 */
class ReportWithRawData extends Shape
{
    /**
     * @param array{
     *     reportArn?: string|null,
     *     data?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

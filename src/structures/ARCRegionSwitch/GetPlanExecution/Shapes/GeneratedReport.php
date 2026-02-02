<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $reportGenerationTime
 * @property ReportOutput|null $reportOutput
 */
class GeneratedReport extends Shape
{
    /**
     * @param array{
     *     reportGenerationTime?: \Aws\Api\DateTimeResult|null,
     *     reportOutput?: ReportOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

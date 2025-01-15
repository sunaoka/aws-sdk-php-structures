<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $reportType
 */
class ExperimentReportS3Report extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     reportType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

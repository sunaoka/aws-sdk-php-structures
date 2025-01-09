<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportState $state
 * @property list<ExperimentReportS3Report> $s3Reports
 */
class ExperimentReport extends Shape
{
    /**
     * @param array{
     *     state?: ExperimentReportState,
     *     s3Reports?: list<ExperimentReportS3Report>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

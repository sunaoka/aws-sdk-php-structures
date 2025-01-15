<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportState|null $state
 * @property list<ExperimentReportS3Report>|null $s3Reports
 */
class ExperimentReport extends Shape
{
    /**
     * @param array{
     *     state?: ExperimentReportState|null,
     *     s3Reports?: list<ExperimentReportS3Report>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

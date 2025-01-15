<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportConfigurationOutputsS3Configuration|null $s3Configuration
 */
class ExperimentReportConfigurationOutputs extends Shape
{
    /**
     * @param array{s3Configuration?: ExperimentReportConfigurationOutputsS3Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

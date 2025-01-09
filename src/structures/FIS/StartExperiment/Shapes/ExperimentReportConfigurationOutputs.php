<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportConfigurationOutputsS3Configuration $s3Configuration
 */
class ExperimentReportConfigurationOutputs extends Shape
{
    /**
     * @param array{s3Configuration?: ExperimentReportConfigurationOutputsS3Configuration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

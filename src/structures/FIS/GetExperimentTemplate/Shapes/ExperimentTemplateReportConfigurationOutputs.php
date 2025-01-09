<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportConfigurationS3Output $s3Configuration
 */
class ExperimentTemplateReportConfigurationOutputs extends Shape
{
    /**
     * @param array{s3Configuration?: ReportConfigurationS3Output} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

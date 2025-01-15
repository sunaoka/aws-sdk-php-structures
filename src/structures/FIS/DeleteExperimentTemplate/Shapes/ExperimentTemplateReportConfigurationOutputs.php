<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportConfigurationS3Output|null $s3Configuration
 */
class ExperimentTemplateReportConfigurationOutputs extends Shape
{
    /**
     * @param array{s3Configuration?: ReportConfigurationS3Output|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

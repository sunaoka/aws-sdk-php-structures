<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportConfigurationS3OutputInput $s3Configuration
 */
class ExperimentTemplateReportConfigurationOutputsInput extends Shape
{
    /**
     * @param array{s3Configuration?: ReportConfigurationS3OutputInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

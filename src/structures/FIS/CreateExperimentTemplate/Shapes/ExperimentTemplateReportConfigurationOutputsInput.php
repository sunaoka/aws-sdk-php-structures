<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportConfigurationS3OutputInput|null $s3Configuration
 */
class ExperimentTemplateReportConfigurationOutputsInput extends Shape
{
    /**
     * @param array{s3Configuration?: ReportConfigurationS3OutputInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

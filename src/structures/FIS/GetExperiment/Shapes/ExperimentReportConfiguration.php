<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportConfigurationOutputs $outputs
 * @property ExperimentReportConfigurationDataSources $dataSources
 * @property string $preExperimentDuration
 * @property string $postExperimentDuration
 */
class ExperimentReportConfiguration extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentReportConfigurationOutputs,
     *     dataSources?: ExperimentReportConfigurationDataSources,
     *     preExperimentDuration?: string,
     *     postExperimentDuration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

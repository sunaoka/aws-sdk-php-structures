<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentReportConfigurationOutputs|null $outputs
 * @property ExperimentReportConfigurationDataSources|null $dataSources
 * @property string|null $preExperimentDuration
 * @property string|null $postExperimentDuration
 */
class ExperimentReportConfiguration extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentReportConfigurationOutputs|null,
     *     dataSources?: ExperimentReportConfigurationDataSources|null,
     *     preExperimentDuration?: string|null,
     *     postExperimentDuration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

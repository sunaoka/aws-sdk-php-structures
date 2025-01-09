<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateReportConfigurationOutputs $outputs
 * @property ExperimentTemplateReportConfigurationDataSources $dataSources
 * @property string $preExperimentDuration
 * @property string $postExperimentDuration
 */
class ExperimentTemplateReportConfiguration extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentTemplateReportConfigurationOutputs,
     *     dataSources?: ExperimentTemplateReportConfigurationDataSources,
     *     preExperimentDuration?: string,
     *     postExperimentDuration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

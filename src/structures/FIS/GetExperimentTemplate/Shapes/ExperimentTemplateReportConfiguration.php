<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateReportConfigurationOutputs|null $outputs
 * @property ExperimentTemplateReportConfigurationDataSources|null $dataSources
 * @property string|null $preExperimentDuration
 * @property string|null $postExperimentDuration
 */
class ExperimentTemplateReportConfiguration extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentTemplateReportConfigurationOutputs|null,
     *     dataSources?: ExperimentTemplateReportConfigurationDataSources|null,
     *     preExperimentDuration?: string|null,
     *     postExperimentDuration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

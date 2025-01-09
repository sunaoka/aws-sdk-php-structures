<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateReportConfigurationOutputsInput $outputs
 * @property ExperimentTemplateReportConfigurationDataSourcesInput $dataSources
 * @property string $preExperimentDuration
 * @property string $postExperimentDuration
 */
class CreateExperimentTemplateReportConfigurationInput extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentTemplateReportConfigurationOutputsInput,
     *     dataSources?: ExperimentTemplateReportConfigurationDataSourcesInput,
     *     preExperimentDuration?: string,
     *     postExperimentDuration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

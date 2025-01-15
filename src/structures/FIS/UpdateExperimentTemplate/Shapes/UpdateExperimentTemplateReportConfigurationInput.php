<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExperimentTemplateReportConfigurationOutputsInput|null $outputs
 * @property ExperimentTemplateReportConfigurationDataSourcesInput|null $dataSources
 * @property string|null $preExperimentDuration
 * @property string|null $postExperimentDuration
 */
class UpdateExperimentTemplateReportConfigurationInput extends Shape
{
    /**
     * @param array{
     *     outputs?: ExperimentTemplateReportConfigurationOutputsInput|null,
     *     dataSources?: ExperimentTemplateReportConfigurationDataSourcesInput|null,
     *     preExperimentDuration?: string|null,
     *     postExperimentDuration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

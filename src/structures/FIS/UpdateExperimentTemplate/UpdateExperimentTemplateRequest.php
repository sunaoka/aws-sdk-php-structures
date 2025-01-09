<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $description
 * @property list<Shapes\UpdateExperimentTemplateStopConditionInput> $stopConditions
 * @property array<string, Shapes\UpdateExperimentTemplateTargetInput> $targets
 * @property array<string, Shapes\UpdateExperimentTemplateActionInputItem> $actions
 * @property string $roleArn
 * @property Shapes\UpdateExperimentTemplateLogConfigurationInput $logConfiguration
 * @property Shapes\UpdateExperimentTemplateExperimentOptionsInput $experimentOptions
 * @property Shapes\UpdateExperimentTemplateReportConfigurationInput $experimentReportConfiguration
 */
class UpdateExperimentTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     description?: string,
     *     stopConditions?: list<Shapes\UpdateExperimentTemplateStopConditionInput>,
     *     targets?: array<string, Shapes\UpdateExperimentTemplateTargetInput>,
     *     actions?: array<string, Shapes\UpdateExperimentTemplateActionInputItem>,
     *     roleArn?: string,
     *     logConfiguration?: Shapes\UpdateExperimentTemplateLogConfigurationInput,
     *     experimentOptions?: Shapes\UpdateExperimentTemplateExperimentOptionsInput,
     *     experimentReportConfiguration?: Shapes\UpdateExperimentTemplateReportConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

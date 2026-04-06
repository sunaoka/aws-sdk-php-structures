<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $description
 * @property list<Shapes\UpdateExperimentTemplateStopConditionInput>|null $stopConditions
 * @property array<string, Shapes\UpdateExperimentTemplateTargetInput>|null $targets
 * @property array<string, Shapes\UpdateExperimentTemplateActionInputItem>|null $actions
 * @property string|null $roleArn
 * @property Shapes\UpdateExperimentTemplateLogConfigurationInput|null $logConfiguration
 */
class UpdateExperimentTemplateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     description?: string|null,
     *     stopConditions?: list<Shapes\UpdateExperimentTemplateStopConditionInput>|null,
     *     targets?: array<string, Shapes\UpdateExperimentTemplateTargetInput>|null,
     *     actions?: array<string, Shapes\UpdateExperimentTemplateActionInputItem>|null,
     *     roleArn?: string|null,
     *     logConfiguration?: Shapes\UpdateExperimentTemplateLogConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

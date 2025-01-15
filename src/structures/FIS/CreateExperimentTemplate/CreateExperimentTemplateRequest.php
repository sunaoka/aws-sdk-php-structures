<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property list<Shapes\CreateExperimentTemplateStopConditionInput> $stopConditions
 * @property array<string, Shapes\CreateExperimentTemplateTargetInput>|null $targets
 * @property array<string, Shapes\CreateExperimentTemplateActionInput> $actions
 * @property string $roleArn
 * @property array<string, string>|null $tags
 * @property Shapes\CreateExperimentTemplateLogConfigurationInput|null $logConfiguration
 * @property Shapes\CreateExperimentTemplateExperimentOptionsInput|null $experimentOptions
 * @property Shapes\CreateExperimentTemplateReportConfigurationInput|null $experimentReportConfiguration
 */
class CreateExperimentTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     description: string,
     *     stopConditions: list<Shapes\CreateExperimentTemplateStopConditionInput>,
     *     targets?: array<string, Shapes\CreateExperimentTemplateTargetInput>|null,
     *     actions: array<string, Shapes\CreateExperimentTemplateActionInput>,
     *     roleArn: string,
     *     tags?: array<string, string>|null,
     *     logConfiguration?: Shapes\CreateExperimentTemplateLogConfigurationInput|null,
     *     experimentOptions?: Shapes\CreateExperimentTemplateExperimentOptionsInput|null,
     *     experimentReportConfiguration?: Shapes\CreateExperimentTemplateReportConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

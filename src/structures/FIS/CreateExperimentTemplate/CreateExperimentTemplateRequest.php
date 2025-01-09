<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property list<Shapes\CreateExperimentTemplateStopConditionInput> $stopConditions
 * @property array<string, Shapes\CreateExperimentTemplateTargetInput> $targets
 * @property array<string, Shapes\CreateExperimentTemplateActionInput> $actions
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property Shapes\CreateExperimentTemplateLogConfigurationInput $logConfiguration
 * @property Shapes\CreateExperimentTemplateExperimentOptionsInput $experimentOptions
 * @property Shapes\CreateExperimentTemplateReportConfigurationInput $experimentReportConfiguration
 */
class CreateExperimentTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     description: string,
     *     stopConditions: list<Shapes\CreateExperimentTemplateStopConditionInput>,
     *     targets?: array<string, Shapes\CreateExperimentTemplateTargetInput>,
     *     actions: array<string, Shapes\CreateExperimentTemplateActionInput>,
     *     roleArn: string,
     *     tags?: array<string, string>,
     *     logConfiguration?: Shapes\CreateExperimentTemplateLogConfigurationInput,
     *     experimentOptions?: Shapes\CreateExperimentTemplateExperimentOptionsInput,
     *     experimentReportConfiguration?: Shapes\CreateExperimentTemplateReportConfigurationInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

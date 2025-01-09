<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $stepGroupId
 * @property string $templateId
 * @property string $name
 * @property string $description
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property string $creationTime
 * @property list<string> $previous
 * @property list<string> $next
 * @property list<Shapes\StepOutput> $outputs
 * @property Shapes\StepAutomationConfiguration $stepAutomationConfiguration
 */
class GetTemplateStepResponse extends Response
{
}

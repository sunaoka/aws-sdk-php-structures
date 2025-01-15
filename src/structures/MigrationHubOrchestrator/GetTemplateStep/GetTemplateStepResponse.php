<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $stepGroupId
 * @property string|null $templateId
 * @property string|null $name
 * @property string|null $description
 * @property 'MANUAL'|'AUTOMATED'|null $stepActionType
 * @property string|null $creationTime
 * @property list<string>|null $previous
 * @property list<string>|null $next
 * @property list<Shapes\StepOutput>|null $outputs
 * @property Shapes\StepAutomationConfiguration|null $stepAutomationConfiguration
 */
class GetTemplateStepResponse extends Response
{
}

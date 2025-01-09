<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStepGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $templateId
 * @property string $id
 * @property string $name
 * @property string $description
 * @property 'AWAITING_DEPENDENCIES'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'PAUSING'|'USER_ATTENTION_REQUIRED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property list<Shapes\Tool> $tools
 * @property list<string> $previous
 * @property list<string> $next
 */
class GetTemplateStepGroupResponse extends Response
{
}

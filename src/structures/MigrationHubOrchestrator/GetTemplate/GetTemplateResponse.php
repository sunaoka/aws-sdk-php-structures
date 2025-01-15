<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $templateArn
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\TemplateInput>|null $inputs
 * @property list<Shapes\Tool>|null $tools
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $owner
 * @property 'CREATED'|'READY'|'PENDING_CREATION'|'CREATING'|'CREATION_FAILED'|null $status
 * @property string|null $statusMessage
 * @property string|null $templateClass
 * @property array<string, string>|null $tags
 */
class GetTemplateResponse extends Response
{
}

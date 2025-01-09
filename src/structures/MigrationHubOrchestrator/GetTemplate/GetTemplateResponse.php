<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $templateArn
 * @property string $name
 * @property string $description
 * @property list<Shapes\TemplateInput> $inputs
 * @property list<Shapes\Tool> $tools
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $owner
 * @property 'CREATED'|'READY'|'PENDING_CREATION'|'CREATING'|'CREATION_FAILED' $status
 * @property string $statusMessage
 * @property string $templateClass
 * @property array<string, string> $tags
 */
class GetTemplateResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\TemplateInput>|null $inputs
 * @property list<Shapes\Tool>|null $tools
 * @property 'CREATED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class GetTemplateResponse extends Response
{
}

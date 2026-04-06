<?php

namespace Sunaoka\Aws\Structures\NovaAct\GetWorkflowDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property Shapes\WorkflowExportConfig|null $exportConfig
 * @property 'ACTIVE'|'DELETING' $status
 */
class GetWorkflowDefinitionResponse extends Response
{
}

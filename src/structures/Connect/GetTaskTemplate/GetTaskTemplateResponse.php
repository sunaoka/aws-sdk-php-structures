<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceId
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string|null $Description
 * @property string|null $ContactFlowId
 * @property string|null $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints|null $Constraints
 * @property Shapes\TaskTemplateDefaults|null $Defaults
 * @property list<Shapes\TaskTemplateField>|null $Fields
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property array<string, string>|null $Tags
 */
class GetTaskTemplateResponse extends Response
{
}

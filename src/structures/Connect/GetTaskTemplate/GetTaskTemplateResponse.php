<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InstanceId
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property string $ContactFlowId
 * @property string $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints $Constraints
 * @property Shapes\TaskTemplateDefaults $Defaults
 * @property list<Shapes\TaskTemplateField> $Fields
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property array<string, string> $Tags
 */
class GetTaskTemplateResponse extends Response
{
}

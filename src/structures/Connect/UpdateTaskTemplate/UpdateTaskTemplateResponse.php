<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceId
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ContactFlowId
 * @property string|null $SelfAssignFlowId
 * @property Shapes\TaskTemplateConstraints|null $Constraints
 * @property Shapes\TaskTemplateDefaults|null $Defaults
 * @property list<Shapes\TaskTemplateField>|null $Fields
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class UpdateTaskTemplateResponse extends Response
{
}

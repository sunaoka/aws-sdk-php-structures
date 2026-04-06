<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property int|null $EngineVersion
 * @property 'READY'|'DELETING'|null $WorkflowStatus
 * @property Shapes\DefinitionS3Location|null $DefinitionS3Location
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfiguration
 * @property string|null $RoleArn
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property string|null $TriggerMode
 * @property string|null $WorkflowDefinition
 */
class GetWorkflowResponse extends Response
{
}

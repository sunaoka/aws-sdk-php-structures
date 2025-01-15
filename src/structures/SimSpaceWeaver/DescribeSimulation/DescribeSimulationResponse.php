<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property string|null $ExecutionId
 * @property Shapes\LiveSimulationState|null $LiveSimulationState
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property string|null $MaximumDuration
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property string|null $SchemaError
 * @property Shapes\S3Location|null $SchemaS3Location
 * @property Shapes\S3Location|null $SnapshotS3Location
 * @property string|null $StartError
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS'|null $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED'|null $TargetStatus
 */
class DescribeSimulationResponse extends Response
{
}

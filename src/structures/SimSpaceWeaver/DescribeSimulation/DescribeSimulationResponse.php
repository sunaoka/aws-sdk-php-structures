<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DescribeSimulation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property string $ExecutionId
 * @property Shapes\LiveSimulationState $LiveSimulationState
 * @property Shapes\LoggingConfiguration $LoggingConfiguration
 * @property string $MaximumDuration
 * @property string $Name
 * @property string $RoleArn
 * @property string $SchemaError
 * @property Shapes\S3Location $SchemaS3Location
 * @property Shapes\S3Location $SnapshotS3Location
 * @property string $StartError
 * @property 'UNKNOWN'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED'|'SNAPSHOT_IN_PROGRESS' $Status
 * @property 'UNKNOWN'|'STARTED'|'STOPPED'|'DELETED' $TargetStatus
 */
class DescribeSimulationResponse extends Response
{
}

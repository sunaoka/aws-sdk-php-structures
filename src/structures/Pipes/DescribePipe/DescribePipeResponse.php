<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'RUNNING'|'STOPPED'|'DELETED' $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED' $CurrentState
 * @property string $StateReason
 * @property string $Source
 * @property Shapes\PipeSourceParameters $SourceParameters
 * @property string $Enrichment
 * @property Shapes\PipeEnrichmentParameters $EnrichmentParameters
 * @property string $Target
 * @property Shapes\PipeTargetParameters $TargetParameters
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\PipeLogConfiguration $LogConfiguration
 * @property string $KmsKeyIdentifier
 */
class DescribePipeResponse extends Response
{
}

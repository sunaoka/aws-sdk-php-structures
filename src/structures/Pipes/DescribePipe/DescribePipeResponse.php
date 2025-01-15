<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|'DELETED'|null $DesiredState
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|'DELETE_FAILED'|'CREATE_ROLLBACK_FAILED'|'DELETE_ROLLBACK_FAILED'|'UPDATE_ROLLBACK_FAILED'|null $CurrentState
 * @property string|null $StateReason
 * @property string|null $Source
 * @property Shapes\PipeSourceParameters|null $SourceParameters
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property string|null $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 * @property string|null $RoleArn
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\PipeLogConfiguration|null $LogConfiguration
 * @property string|null $KmsKeyIdentifier
 */
class DescribePipeResponse extends Response
{
}

<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'RUNNING'|'STOPPED'|'CREATING'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'CREATE_FAILED'|'UPDATE_FAILED'|'START_FAILED'|'STOP_FAILED'|null $CurrentState
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|'DELETED'|null $DesiredState
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property string|null $Source
 * @property Shapes\PipeSourceParameters|null $SourceParameters
 * @property string|null $StateReason
 * @property array<string, string>|null $Tags
 * @property string|null $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 */
class DescribePipeResponse extends Response
{
}

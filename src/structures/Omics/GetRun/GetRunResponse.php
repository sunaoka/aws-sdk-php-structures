<?php

namespace Sunaoka\Aws\Structures\Omics\GetRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $cacheId
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $engineVersion
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED' $status
 * @property string $workflowId
 * @property 'PRIVATE'|'READY2RUN' $workflowType
 * @property string $runId
 * @property string $roleArn
 * @property string $name
 * @property string $runGroupId
 * @property int<0, 100000> $priority
 * @property string $definition
 * @property string $digest
 * @property Shapes\RunParameters $parameters
 * @property int<0, 100000> $storageCapacity
 * @property string $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL' $logLevel
 * @property array<string, string> $resourceDigests
 * @property string $startedBy
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $stopTime
 * @property string $statusMessage
 * @property array<string, string> $tags
 * @property 'GPU' $accelerators
 * @property 'RETAIN'|'REMOVE' $retentionMode
 * @property string $failureReason
 * @property Shapes\RunLogLocation $logLocation
 * @property string $uuid
 * @property string $runOutputUri
 * @property 'STATIC'|'DYNAMIC' $storageType
 * @property string $workflowOwnerId
 */
class GetRunResponse extends Response
{
}

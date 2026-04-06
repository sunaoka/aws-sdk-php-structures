<?php

namespace Sunaoka\Aws\Structures\Omics\GetRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $cacheId
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $engineVersion
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null $status
 * @property string|null $workflowId
 * @property 'PRIVATE'|'READY2RUN'|null $workflowType
 * @property string|null $runId
 * @property string|null $roleArn
 * @property string|null $name
 * @property string|null $runGroupId
 * @property int<0, 100000>|null $priority
 * @property string|null $definition
 * @property string|null $digest
 * @property Shapes\RunParameters|null $parameters
 * @property int<0, 100000>|null $storageCapacity
 * @property string|null $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL'|null $logLevel
 * @property array<string, string>|null $resourceDigests
 * @property string|null $startedBy
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $stopTime
 * @property string|null $statusMessage
 * @property array<string, string>|null $tags
 * @property 'GPU'|null $accelerators
 * @property 'RETAIN'|'REMOVE'|null $retentionMode
 * @property string|null $failureReason
 * @property Shapes\RunLogLocation|null $logLocation
 * @property string|null $uuid
 * @property string|null $runOutputUri
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property string|null $workflowOwnerId
 */
class GetRunResponse extends Response
{
}

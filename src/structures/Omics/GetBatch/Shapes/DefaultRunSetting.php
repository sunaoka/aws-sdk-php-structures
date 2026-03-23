<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 * @property 'PRIVATE'|'READY2RUN'|null $workflowType
 * @property string $roleArn
 * @property string|null $name
 * @property string|null $cacheId
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $runGroupId
 * @property int<0, 100000>|null $priority
 * @property RunParameters|null $parameters
 * @property int<0, 100000>|null $storageCapacity
 * @property string|null $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL'|null $logLevel
 * @property array<string, string>|null $runTags
 * @property 'RETAIN'|'REMOVE'|null $retentionMode
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property string|null $workflowOwnerId
 * @property string|null $outputBucketOwnerId
 * @property string|null $workflowVersionName
 */
class DefaultRunSetting extends Shape
{
    /**
     * @param array{
     *     workflowId: string,
     *     workflowType?: 'PRIVATE'|'READY2RUN'|null,
     *     roleArn: string,
     *     name?: string|null,
     *     cacheId?: string|null,
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null,
     *     runGroupId?: string|null,
     *     priority?: int<0, 100000>|null,
     *     parameters?: RunParameters|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     outputUri?: string|null,
     *     logLevel?: 'OFF'|'FATAL'|'ERROR'|'ALL'|null,
     *     runTags?: array<string, string>|null,
     *     retentionMode?: 'RETAIN'|'REMOVE'|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     workflowOwnerId?: string|null,
     *     outputBucketOwnerId?: string|null,
     *     workflowVersionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

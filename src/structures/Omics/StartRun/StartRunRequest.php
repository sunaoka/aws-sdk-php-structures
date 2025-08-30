<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $workflowId
 * @property 'PRIVATE'|'READY2RUN'|null $workflowType
 * @property string|null $runId
 * @property string $roleArn
 * @property string|null $name
 * @property string|null $cacheId
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $runGroupId
 * @property int<0, 100000>|null $priority
 * @property Shapes\RunParameters|null $parameters
 * @property int<0, 100000>|null $storageCapacity
 * @property string $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL'|null $logLevel
 * @property array<string, string>|null $tags
 * @property string $requestId
 * @property 'RETAIN'|'REMOVE'|null $retentionMode
 * @property 'STATIC'|'DYNAMIC'|null $storageType
 * @property string|null $workflowOwnerId
 * @property string|null $workflowVersionName
 */
class StartRunRequest extends Request
{
    /**
     * @param array{
     *     workflowId?: string|null,
     *     workflowType?: 'PRIVATE'|'READY2RUN'|null,
     *     runId?: string|null,
     *     roleArn: string,
     *     name?: string|null,
     *     cacheId?: string|null,
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null,
     *     runGroupId?: string|null,
     *     priority?: int<0, 100000>|null,
     *     parameters?: Shapes\RunParameters|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     outputUri: string,
     *     logLevel?: 'OFF'|'FATAL'|'ERROR'|'ALL'|null,
     *     tags?: array<string, string>|null,
     *     requestId: string,
     *     retentionMode?: 'RETAIN'|'REMOVE'|null,
     *     storageType?: 'STATIC'|'DYNAMIC'|null,
     *     workflowOwnerId?: string|null,
     *     workflowVersionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

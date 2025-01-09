<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowId
 * @property 'PRIVATE'|'READY2RUN' $workflowType
 * @property string $runId
 * @property string $roleArn
 * @property string $name
 * @property string $cacheId
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $runGroupId
 * @property int $priority
 * @property Shapes\RunParameters $parameters
 * @property int $storageCapacity
 * @property string $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL' $logLevel
 * @property array<string, string> $tags
 * @property string $requestId
 * @property 'RETAIN'|'REMOVE' $retentionMode
 * @property 'STATIC'|'DYNAMIC' $storageType
 * @property string $workflowOwnerId
 */
class StartRunRequest extends Request
{
    /**
     * @param array{
     *     workflowId?: string,
     *     workflowType?: 'PRIVATE'|'READY2RUN',
     *     runId?: string,
     *     roleArn: string,
     *     name?: string,
     *     cacheId?: string,
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS',
     *     runGroupId?: string,
     *     priority?: int,
     *     parameters?: Shapes\RunParameters,
     *     storageCapacity?: int,
     *     outputUri?: string,
     *     logLevel?: 'OFF'|'FATAL'|'ERROR'|'ALL',
     *     tags?: array<string, string>,
     *     requestId: string,
     *     retentionMode?: 'RETAIN'|'REMOVE',
     *     storageType?: 'STATIC'|'DYNAMIC',
     *     workflowOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $workflowId
 * @property 'PRIVATE'|'READY2RUN'|null $workflowType
 * @property string|null $runId
 * @property string $roleArn
 * @property string|null $name
 * @property string|null $runGroupId
 * @property int<0, 100000>|null $priority
 * @property Shapes\RunParameters|null $parameters
 * @property int<0, 100000>|null $storageCapacity
 * @property string|null $outputUri
 * @property 'OFF'|'FATAL'|'ERROR'|'ALL'|null $logLevel
 * @property array<string, string>|null $tags
 * @property string $requestId
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
     *     runGroupId?: string|null,
     *     priority?: int<0, 100000>|null,
     *     parameters?: Shapes\RunParameters|null,
     *     storageCapacity?: int<0, 100000>|null,
     *     outputUri?: string|null,
     *     logLevel?: 'OFF'|'FATAL'|'ERROR'|'ALL'|null,
     *     tags?: array<string, string>|null,
     *     requestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionActionId
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $workerUpdatedAt
 * @property float|null $progressPercent
 * @property list<TaskRunManifestPropertiesResponse>|null $manifests
 * @property string $sessionId
 * @property int<-2147483648, 2147483647>|null $processExitCode
 * @property string|null $progressMessage
 * @property list<AcquiredLimit>|null $acquiredLimits
 * @property SessionActionDefinition $definition
 */
class BatchGetSessionActionItem extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionActionId: string,
     *     status: 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED',
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     workerUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     progressPercent?: float|null,
     *     manifests?: list<TaskRunManifestPropertiesResponse>|null,
     *     sessionId: string,
     *     processExitCode?: int<-2147483648, 2147483647>|null,
     *     progressMessage?: string|null,
     *     acquiredLimits?: list<AcquiredLimit>|null,
     *     definition: SessionActionDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

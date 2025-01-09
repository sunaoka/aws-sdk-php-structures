<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'DOWNLOAD_BATCHSPEC'|'IN_PROGRESS'|'COMBINE_ARTIFACTS'|'SUCCEEDED'|'FAILED'|'STOPPED' $phaseType
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED' $phaseStatus
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $durationInSeconds
 * @property list<PhaseContext> $contexts
 */
class BuildBatchPhase extends Shape
{
    /**
     * @param array{
     *     phaseType?: 'SUBMITTED'|'DOWNLOAD_BATCHSPEC'|'IN_PROGRESS'|'COMBINE_ARTIFACTS'|'SUCCEEDED'|'FAILED'|'STOPPED',
     *     phaseStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     durationInSeconds?: int,
     *     contexts?: list<PhaseContext>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'DOWNLOAD_BATCHSPEC'|'IN_PROGRESS'|'COMBINE_ARTIFACTS'|'SUCCEEDED'|'FAILED'|'STOPPED'|null $phaseType
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $phaseStatus
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int|null $durationInSeconds
 * @property list<PhaseContext>|null $contexts
 */
class BuildBatchPhase extends Shape
{
    /**
     * @param array{
     *     phaseType?: 'SUBMITTED'|'DOWNLOAD_BATCHSPEC'|'IN_PROGRESS'|'COMBINE_ARTIFACTS'|'SUCCEEDED'|'FAILED'|'STOPPED'|null,
     *     phaseStatus?: 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     durationInSeconds?: int|null,
     *     contexts?: list<PhaseContext>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

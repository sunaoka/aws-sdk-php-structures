<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartSandbox\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $phaseType
 * @property 'SUCCEEDED'|'FAILED'|'FAULT'|'TIMED_OUT'|'IN_PROGRESS'|'STOPPED'|null $phaseStatus
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int|null $durationInSeconds
 * @property list<PhaseContext>|null $contexts
 */
class SandboxSessionPhase extends Shape
{
    /**
     * @param array{
     *     phaseType?: string|null,
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

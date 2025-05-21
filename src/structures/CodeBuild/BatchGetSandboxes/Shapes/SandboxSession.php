<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $currentPhase
 * @property list<SandboxSessionPhase>|null $phases
 * @property string|null $resolvedSourceVersion
 * @property LogsLocation|null $logs
 * @property NetworkInterface|null $networkInterface
 */
class SandboxSession extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     status?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     currentPhase?: string|null,
     *     phases?: list<SandboxSessionPhase>|null,
     *     resolvedSourceVersion?: string|null,
     *     logs?: LogsLocation|null,
     *     networkInterface?: NetworkInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

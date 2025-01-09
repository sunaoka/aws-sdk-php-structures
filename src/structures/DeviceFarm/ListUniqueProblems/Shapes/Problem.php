<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProblemDetail $run
 * @property ProblemDetail $job
 * @property ProblemDetail $suite
 * @property ProblemDetail $test
 * @property Device $device
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED' $result
 * @property string $message
 */
class Problem extends Shape
{
    /**
     * @param array{
     *     run?: ProblemDetail,
     *     job?: ProblemDetail,
     *     suite?: ProblemDetail,
     *     test?: ProblemDetail,
     *     device?: Device,
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

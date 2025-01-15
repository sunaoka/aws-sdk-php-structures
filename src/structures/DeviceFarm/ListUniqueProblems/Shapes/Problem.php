<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProblemDetail|null $run
 * @property ProblemDetail|null $job
 * @property ProblemDetail|null $suite
 * @property ProblemDetail|null $test
 * @property Device|null $device
 * @property 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null $result
 * @property string|null $message
 */
class Problem extends Shape
{
    /**
     * @param array{
     *     run?: ProblemDetail|null,
     *     job?: ProblemDetail|null,
     *     suite?: ProblemDetail|null,
     *     test?: ProblemDetail|null,
     *     device?: Device|null,
     *     result?: 'PENDING'|'PASSED'|'WARNED'|'FAILED'|'SKIPPED'|'ERRORED'|'STOPPED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

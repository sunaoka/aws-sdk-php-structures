<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property list<Problem> $problems
 */
class UniqueProblem extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     problems?: list<Problem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property list<Problem>|null $problems
 */
class UniqueProblem extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     problems?: list<Problem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

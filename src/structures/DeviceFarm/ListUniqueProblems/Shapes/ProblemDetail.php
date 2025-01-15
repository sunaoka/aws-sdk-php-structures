<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 */
class ProblemDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

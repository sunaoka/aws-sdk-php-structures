<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobScopingBlock|null $excludes
 * @property JobScopingBlock|null $includes
 */
class Scoping extends Shape
{
    /**
     * @param array{
     *     excludes?: JobScopingBlock|null,
     *     includes?: JobScopingBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

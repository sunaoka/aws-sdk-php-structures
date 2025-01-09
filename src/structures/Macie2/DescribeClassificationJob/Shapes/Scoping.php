<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobScopingBlock $excludes
 * @property JobScopingBlock $includes
 */
class Scoping extends Shape
{
    /**
     * @param array{
     *     excludes?: JobScopingBlock,
     *     includes?: JobScopingBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

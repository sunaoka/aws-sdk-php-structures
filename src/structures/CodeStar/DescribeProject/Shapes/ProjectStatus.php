<?php

namespace Sunaoka\Aws\Structures\CodeStar\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $state
 * @property string|null $reason
 */
class ProjectStatus extends Shape
{
    /**
     * @param array{
     *     state: string,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

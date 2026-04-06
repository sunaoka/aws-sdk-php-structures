<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerName
 * @property string|null $condition
 */
class TaskContainerDependency extends Shape
{
    /**
     * @param array{
     *     containerName?: string|null,
     *     condition?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

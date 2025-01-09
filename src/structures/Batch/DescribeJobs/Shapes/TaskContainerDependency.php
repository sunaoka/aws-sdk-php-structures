<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property string $condition
 */
class TaskContainerDependency extends Shape
{
    /**
     * @param array{
     *     containerName?: string,
     *     condition?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

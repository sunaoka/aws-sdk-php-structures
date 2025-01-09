<?php

namespace Sunaoka\Aws\Structures\Deadline\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $int
 * @property string $float
 * @property string $string
 * @property string $path
 */
class TaskParameterValue extends Shape
{
    /**
     * @param array{
     *     int?: string,
     *     float?: string,
     *     string?: string,
     *     path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

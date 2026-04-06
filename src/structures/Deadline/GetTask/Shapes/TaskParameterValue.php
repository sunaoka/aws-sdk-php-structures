<?php

namespace Sunaoka\Aws\Structures\Deadline\GetTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $int
 * @property string|null $float
 * @property string|null $string
 * @property string|null $path
 * @property string|null $chunkInt
 */
class TaskParameterValue extends Shape
{
    /**
     * @param array{
     *     int?: string|null,
     *     float?: string|null,
     *     string?: string|null,
     *     path?: string|null,
     *     chunkInt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

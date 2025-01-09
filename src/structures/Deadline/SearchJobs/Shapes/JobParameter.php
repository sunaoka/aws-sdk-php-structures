<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $int
 * @property string $float
 * @property string $string
 * @property string $path
 */
class JobParameter extends Shape
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

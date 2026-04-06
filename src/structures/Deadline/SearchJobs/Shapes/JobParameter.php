<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $float
 * @property string|null $int
 * @property string|null $path
 * @property string|null $string
 */
class JobParameter extends Shape
{
    /**
     * @param array{
     *     float?: string|null,
     *     int?: string|null,
     *     path?: string|null,
     *     string?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

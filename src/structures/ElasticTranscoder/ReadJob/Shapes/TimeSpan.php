<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string $Duration
 */
class TimeSpan extends Shape
{
    /**
     * @param array{
     *     StartTime?: string,
     *     Duration?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartTime
 * @property string|null $Duration
 */
class TimeSpan extends Shape
{
    /**
     * @param array{
     *     StartTime?: string|null,
     *     Duration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

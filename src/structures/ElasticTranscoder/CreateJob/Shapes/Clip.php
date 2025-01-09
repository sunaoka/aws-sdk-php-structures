<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSpan $TimeSpan
 */
class Clip extends Shape
{
    /**
     * @param array{TimeSpan?: TimeSpan} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeSpan|null $TimeSpan
 */
class Clip extends Shape
{
    /**
     * @param array{TimeSpan?: TimeSpan|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

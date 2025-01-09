<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Progressing
 * @property string $Completed
 * @property string $Warning
 * @property string $Error
 */
class Notifications extends Shape
{
    /**
     * @param array{
     *     Progressing?: string,
     *     Completed?: string,
     *     Warning?: string,
     *     Error?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

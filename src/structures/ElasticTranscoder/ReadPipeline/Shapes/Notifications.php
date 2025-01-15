<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Progressing
 * @property string|null $Completed
 * @property string|null $Warning
 * @property string|null $Error
 */
class Notifications extends Shape
{
    /**
     * @param array{
     *     Progressing?: string|null,
     *     Completed?: string|null,
     *     Warning?: string|null,
     *     Error?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

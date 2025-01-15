<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListStreamProcessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING'|null $Status
 */
class StreamProcessor extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

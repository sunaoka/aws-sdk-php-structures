<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListStreamProcessors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING' $Status
 */
class StreamProcessor extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: 'STOPPED'|'STARTING'|'RUNNING'|'FAILED'|'STOPPING'|'UPDATING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

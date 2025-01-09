<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationQueue
 * @property string $SourceQueue
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class QueueTransition extends Shape
{
    /**
     * @param array{
     *     DestinationQueue?: string,
     *     SourceQueue?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

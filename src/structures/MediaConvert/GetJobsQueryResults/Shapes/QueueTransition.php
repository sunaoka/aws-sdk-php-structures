<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationQueue
 * @property string|null $SourceQueue
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class QueueTransition extends Shape
{
    /**
     * @param array{
     *     DestinationQueue?: string|null,
     *     SourceQueue?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

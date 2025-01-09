<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetDASHStreamingSessionURL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 */
class DASHTimestampRange extends Shape
{
    /**
     * @param array{
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

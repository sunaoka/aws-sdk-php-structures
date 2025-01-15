<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetHLSStreamingSessionURL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 */
class HLSTimestampRange extends Shape
{
    /**
     * @param array{
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

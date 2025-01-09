<?php

namespace Sunaoka\Aws\Structures\Iot\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamId
 * @property string $streamArn
 * @property int<0, 65535> $streamVersion
 * @property string $description
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     streamId?: string,
     *     streamArn?: string,
     *     streamVersion?: int<0, 65535>,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

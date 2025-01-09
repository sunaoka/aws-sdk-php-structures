<?php

namespace Sunaoka\Aws\Structures\Iot\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streamId
 * @property string $streamArn
 * @property int $streamVersion
 * @property string $description
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     streamId?: string,
     *     streamArn?: string,
     *     streamVersion?: int,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iot\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streamId
 * @property string|null $streamArn
 * @property int<0, 65535>|null $streamVersion
 * @property string|null $description
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     streamId?: string|null,
     *     streamArn?: string|null,
     *     streamVersion?: int<0, 65535>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

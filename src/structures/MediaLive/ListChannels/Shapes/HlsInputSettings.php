<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Bandwidth
 * @property int|null $BufferSegments
 * @property int|null $Retries
 * @property int|null $RetryInterval
 * @property 'MANIFEST'|'SEGMENTS'|null $Scte35Source
 */
class HlsInputSettings extends Shape
{
    /**
     * @param array{
     *     Bandwidth?: int|null,
     *     BufferSegments?: int|null,
     *     Retries?: int|null,
     *     RetryInterval?: int|null,
     *     Scte35Source?: 'MANIFEST'|'SEGMENTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

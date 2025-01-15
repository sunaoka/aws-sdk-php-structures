<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Bandwidth
 * @property int<0, max>|null $BufferSegments
 * @property int<0, max>|null $Retries
 * @property int<0, max>|null $RetryInterval
 * @property 'MANIFEST'|'SEGMENTS'|null $Scte35Source
 */
class HlsInputSettings extends Shape
{
    /**
     * @param array{
     *     Bandwidth?: int<0, max>|null,
     *     BufferSegments?: int<0, max>|null,
     *     Retries?: int<0, max>|null,
     *     RetryInterval?: int<0, max>|null,
     *     Scte35Source?: 'MANIFEST'|'SEGMENTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bandwidth
 * @property int $BufferSegments
 * @property int $Retries
 * @property int $RetryInterval
 * @property 'MANIFEST'|'SEGMENTS' $Scte35Source
 */
class HlsInputSettings extends Shape
{
    /**
     * @param array{
     *     Bandwidth?: int,
     *     BufferSegments?: int,
     *     Retries?: int,
     *     RetryInterval?: int,
     *     Scte35Source?: 'MANIFEST'|'SEGMENTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

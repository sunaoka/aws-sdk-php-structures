<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Bandwidth
 * @property int<0, max> $BufferSegments
 * @property int<0, max> $Retries
 * @property int<0, max> $RetryInterval
 * @property 'MANIFEST'|'SEGMENTS' $Scte35Source
 */
class HlsInputSettings extends Shape
{
    /**
     * @param array{
     *     Bandwidth?: int<0, max>,
     *     BufferSegments?: int<0, max>,
     *     Retries?: int<0, max>,
     *     RetryInterval?: int<0, max>,
     *     Scte35Source?: 'MANIFEST'|'SEGMENTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

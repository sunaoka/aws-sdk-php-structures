<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ConnectionRetryInterval
 * @property int<0, 600> $FilecacheDuration
 * @property int<0, max> $NumRetries
 * @property int<0, 15> $RestartDelay
 */
class HlsBasicPutSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int<0, max>,
     *     FilecacheDuration?: int<0, 600>,
     *     NumRetries?: int<0, max>,
     *     RestartDelay?: int<0, 15>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

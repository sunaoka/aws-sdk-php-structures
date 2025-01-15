<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ConnectionRetryInterval
 * @property int<0, 600>|null $FilecacheDuration
 * @property int<0, max>|null $NumRetries
 * @property int<0, 15>|null $RestartDelay
 */
class HlsBasicPutSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int<0, max>|null,
     *     FilecacheDuration?: int<0, 600>|null,
     *     NumRetries?: int<0, max>|null,
     *     RestartDelay?: int<0, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

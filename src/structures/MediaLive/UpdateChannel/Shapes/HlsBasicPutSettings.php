<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConnectionRetryInterval
 * @property int $FilecacheDuration
 * @property int $NumRetries
 * @property int $RestartDelay
 */
class HlsBasicPutSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int,
     *     FilecacheDuration?: int,
     *     NumRetries?: int,
     *     RestartDelay?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

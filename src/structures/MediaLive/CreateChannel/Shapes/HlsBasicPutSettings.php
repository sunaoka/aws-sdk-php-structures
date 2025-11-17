<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ConnectionRetryInterval
 * @property int|null $FilecacheDuration
 * @property int|null $NumRetries
 * @property int|null $RestartDelay
 */
class HlsBasicPutSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int|null,
     *     FilecacheDuration?: int|null,
     *     NumRetries?: int|null,
     *     RestartDelay?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

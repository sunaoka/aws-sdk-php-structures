<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConnectionRetryInterval
 * @property int $FilecacheDuration
 * @property 'TEMPORAL' $MediaStoreStorageClass
 * @property int $NumRetries
 * @property int $RestartDelay
 */
class HlsMediaStoreSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int,
     *     FilecacheDuration?: int,
     *     MediaStoreStorageClass?: 'TEMPORAL',
     *     NumRetries?: int,
     *     RestartDelay?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

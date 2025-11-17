<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ConnectionRetryInterval
 * @property int|null $FilecacheDuration
 * @property 'TEMPORAL'|null $MediaStoreStorageClass
 * @property int|null $NumRetries
 * @property int|null $RestartDelay
 */
class HlsMediaStoreSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int|null,
     *     FilecacheDuration?: int|null,
     *     MediaStoreStorageClass?: 'TEMPORAL'|null,
     *     NumRetries?: int|null,
     *     RestartDelay?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

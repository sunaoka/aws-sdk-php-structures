<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConnectionRetryInterval
 * @property int $FilecacheDuration
 * @property 'CHUNKED'|'NON_CHUNKED' $HttpTransferMode
 * @property int $NumRetries
 * @property int $RestartDelay
 */
class HlsWebdavSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int,
     *     FilecacheDuration?: int,
     *     HttpTransferMode?: 'CHUNKED'|'NON_CHUNKED',
     *     NumRetries?: int,
     *     RestartDelay?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $ConnectionRetryInterval
 * @property int<0, 600>|null $FilecacheDuration
 * @property 'CHUNKED'|'NON_CHUNKED'|null $HttpTransferMode
 * @property int<0, max>|null $NumRetries
 * @property int<0, 15>|null $RestartDelay
 * @property string|null $Salt
 * @property string|null $Token
 */
class HlsAkamaiSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int<0, max>|null,
     *     FilecacheDuration?: int<0, 600>|null,
     *     HttpTransferMode?: 'CHUNKED'|'NON_CHUNKED'|null,
     *     NumRetries?: int<0, max>|null,
     *     RestartDelay?: int<0, 15>|null,
     *     Salt?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

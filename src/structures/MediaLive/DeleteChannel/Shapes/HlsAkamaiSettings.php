<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ConnectionRetryInterval
 * @property int|null $FilecacheDuration
 * @property 'CHUNKED'|'NON_CHUNKED'|null $HttpTransferMode
 * @property int|null $NumRetries
 * @property int|null $RestartDelay
 * @property string|null $Salt
 * @property string|null $Token
 */
class HlsAkamaiSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int|null,
     *     FilecacheDuration?: int|null,
     *     HttpTransferMode?: 'CHUNKED'|'NON_CHUNKED'|null,
     *     NumRetries?: int|null,
     *     RestartDelay?: int|null,
     *     Salt?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

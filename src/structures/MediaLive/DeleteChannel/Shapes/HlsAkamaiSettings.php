<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConnectionRetryInterval
 * @property int $FilecacheDuration
 * @property 'CHUNKED'|'NON_CHUNKED' $HttpTransferMode
 * @property int $NumRetries
 * @property int $RestartDelay
 * @property string $Salt
 * @property string $Token
 */
class HlsAkamaiSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int,
     *     FilecacheDuration?: int,
     *     HttpTransferMode?: 'CHUNKED'|'NON_CHUNKED',
     *     NumRetries?: int,
     *     RestartDelay?: int,
     *     Salt?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

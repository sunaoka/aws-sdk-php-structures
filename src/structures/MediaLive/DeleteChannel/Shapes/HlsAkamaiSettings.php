<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ConnectionRetryInterval
 * @property int<0, 600> $FilecacheDuration
 * @property 'CHUNKED'|'NON_CHUNKED' $HttpTransferMode
 * @property int<0, max> $NumRetries
 * @property int<0, 15> $RestartDelay
 * @property string $Salt
 * @property string $Token
 */
class HlsAkamaiSettings extends Shape
{
    /**
     * @param array{
     *     ConnectionRetryInterval?: int<0, max>,
     *     FilecacheDuration?: int<0, 600>,
     *     HttpTransferMode?: 'CHUNKED'|'NON_CHUNKED',
     *     NumRetries?: int<0, max>,
     *     RestartDelay?: int<0, 15>,
     *     Salt?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $channels
 * @property string $codec
 * @property int $sampleRate
 * @property int $targetBitrate
 * @property string $track
 */
class AudioConfiguration extends Shape
{
    /**
     * @param array{
     *     channels?: int,
     *     codec?: string,
     *     sampleRate?: int,
     *     targetBitrate?: int,
     *     track?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

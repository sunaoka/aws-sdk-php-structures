<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codec
 * @property int|null $targetBitrate
 * @property int|null $sampleRate
 * @property int|null $channels
 * @property string|null $track
 */
class AudioConfiguration extends Shape
{
    /**
     * @param array{
     *     codec?: string|null,
     *     targetBitrate?: int|null,
     *     sampleRate?: int|null,
     *     channels?: int|null,
     *     track?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

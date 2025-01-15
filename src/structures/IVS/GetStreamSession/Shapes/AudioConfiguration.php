<?php

namespace Sunaoka\Aws\Structures\IVS\GetStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $channels
 * @property string|null $codec
 * @property int|null $sampleRate
 * @property int|null $targetBitrate
 * @property string|null $track
 */
class AudioConfiguration extends Shape
{
    /**
     * @param array{
     *     channels?: int|null,
     *     codec?: string|null,
     *     sampleRate?: int|null,
     *     targetBitrate?: int|null,
     *     track?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

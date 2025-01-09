<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $NetworkId
 * @property string $NetworkName
 * @property int<25, 10000> $NitInterval
 */
class DvbNitSettings extends Shape
{
    /**
     * @param array{
     *     NetworkId?: int<0, 65535>,
     *     NetworkName?: string,
     *     NitInterval?: int<25, 10000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

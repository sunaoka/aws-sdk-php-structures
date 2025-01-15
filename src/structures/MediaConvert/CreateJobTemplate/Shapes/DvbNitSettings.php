<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $NetworkId
 * @property string|null $NetworkName
 * @property int<25, 10000>|null $NitInterval
 */
class DvbNitSettings extends Shape
{
    /**
     * @param array{
     *     NetworkId?: int<0, 65535>|null,
     *     NetworkName?: string|null,
     *     NitInterval?: int<25, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

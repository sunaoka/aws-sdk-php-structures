<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NetworkId
 * @property string $NetworkName
 * @property int $NitInterval
 */
class DvbNitSettings extends Shape
{
    /**
     * @param array{
     *     NetworkId?: int,
     *     NetworkName?: string,
     *     NitInterval?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

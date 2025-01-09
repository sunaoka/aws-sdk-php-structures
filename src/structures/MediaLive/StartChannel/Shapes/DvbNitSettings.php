<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NetworkId
 * @property string $NetworkName
 * @property int $RepInterval
 */
class DvbNitSettings extends Shape
{
    /**
     * @param array{
     *     NetworkId: int,
     *     NetworkName: string,
     *     RepInterval?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

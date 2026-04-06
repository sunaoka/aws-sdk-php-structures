<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65536> $NetworkId
 * @property string $NetworkName
 * @property int<25, 10000>|null $RepInterval
 */
class DvbNitSettings extends Shape
{
    /**
     * @param array{
     *     NetworkId: int<0, 65536>,
     *     NetworkName: string,
     *     RepInterval?: int<25, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

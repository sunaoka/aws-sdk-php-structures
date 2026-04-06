<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisDataStreamData|null $kinesisDataStreamData
 */
class TelemetrySinkData extends Shape
{
    /**
     * @param array{kinesisDataStreamData?: KinesisDataStreamData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

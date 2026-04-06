<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetMissionProfileConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KINESIS_DATA_STREAM' $telemetrySinkType
 * @property TelemetrySinkData $telemetrySinkData
 */
class TelemetrySinkConfig extends Shape
{
    /**
     * @param array{
     *     telemetrySinkType: 'KINESIS_DATA_STREAM',
     *     telemetrySinkData: TelemetrySinkData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

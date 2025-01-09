<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|'WEEKS' $unit
 * @property int<1, 876600> $value
 */
class StorageMinimumTimeToLive extends Shape
{
    /**
     * @param array{
     *     unit: 'HOURS'|'DAYS'|'WEEKS',
     *     value: int<1, 876600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

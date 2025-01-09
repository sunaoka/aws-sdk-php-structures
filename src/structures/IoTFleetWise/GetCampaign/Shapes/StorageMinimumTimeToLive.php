<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|'WEEKS' $unit
 * @property int $value
 */
class StorageMinimumTimeToLive extends Shape
{
    /**
     * @param array{
     *     unit: 'HOURS'|'DAYS'|'WEEKS',
     *     value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

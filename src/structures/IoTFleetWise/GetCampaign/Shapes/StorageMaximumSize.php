<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MB'|'GB'|'TB' $unit
 * @property int<1, 1073741824> $value
 */
class StorageMaximumSize extends Shape
{
    /**
     * @param array{
     *     unit: 'MB'|'GB'|'TB',
     *     value: int<1, 1073741824>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

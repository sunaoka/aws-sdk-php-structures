<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10000, 86400000> $periodMs
 */
class TimeBasedCollectionScheme extends Shape
{
    /**
     * @param array{periodMs: int<10000, 86400000>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

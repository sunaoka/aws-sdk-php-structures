<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $periodMs
 */
class TimeBasedCollectionScheme extends Shape
{
    /**
     * @param array{periodMs: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

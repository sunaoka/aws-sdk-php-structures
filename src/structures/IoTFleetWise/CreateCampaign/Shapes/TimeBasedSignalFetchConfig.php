<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $executionFrequencyMs
 */
class TimeBasedSignalFetchConfig extends Shape
{
    /**
     * @param array{executionFrequencyMs: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

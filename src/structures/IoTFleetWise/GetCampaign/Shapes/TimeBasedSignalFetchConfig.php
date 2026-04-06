<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $executionFrequencyMs
 */
class TimeBasedSignalFetchConfig extends Shape
{
    /**
     * @param array{executionFrequencyMs: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

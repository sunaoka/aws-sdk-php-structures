<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedSignalFetchConfig $timeBased
 * @property ConditionBasedSignalFetchConfig $conditionBased
 */
class SignalFetchConfig extends Shape
{
    /**
     * @param array{
     *     timeBased?: TimeBasedSignalFetchConfig,
     *     conditionBased?: ConditionBasedSignalFetchConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

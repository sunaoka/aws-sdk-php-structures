<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimeBasedSignalFetchConfig|null $timeBased
 * @property ConditionBasedSignalFetchConfig|null $conditionBased
 */
class SignalFetchConfig extends Shape
{
    /**
     * @param array{
     *     timeBased?: TimeBasedSignalFetchConfig|null,
     *     conditionBased?: ConditionBasedSignalFetchConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

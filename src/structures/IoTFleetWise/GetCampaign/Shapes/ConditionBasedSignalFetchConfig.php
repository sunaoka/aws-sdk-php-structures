<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conditionExpression
 * @property 'ALWAYS'|'RISING_EDGE' $triggerMode
 */
class ConditionBasedSignalFetchConfig extends Shape
{
    /**
     * @param array{
     *     conditionExpression: string,
     *     triggerMode: 'ALWAYS'|'RISING_EDGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int<0, 4294967295> $minimumTriggerIntervalMs
 * @property 'ALWAYS'|'RISING_EDGE' $triggerMode
 * @property int<1, 1> $conditionLanguageVersion
 */
class ConditionBasedCollectionScheme extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     minimumTriggerIntervalMs?: int<0, 4294967295>,
     *     triggerMode?: 'ALWAYS'|'RISING_EDGE',
     *     conditionLanguageVersion?: int<1, 1>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

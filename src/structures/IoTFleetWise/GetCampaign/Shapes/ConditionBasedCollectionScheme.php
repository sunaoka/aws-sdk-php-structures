<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int<0, 4294967295>|null $minimumTriggerIntervalMs
 * @property 'ALWAYS'|'RISING_EDGE'|null $triggerMode
 * @property int<1, 1>|null $conditionLanguageVersion
 */
class ConditionBasedCollectionScheme extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     minimumTriggerIntervalMs?: int<0, 4294967295>|null,
     *     triggerMode?: 'ALWAYS'|'RISING_EDGE'|null,
     *     conditionLanguageVersion?: int<1, 1>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

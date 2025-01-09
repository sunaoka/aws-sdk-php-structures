<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property int $minimumTriggerIntervalMs
 * @property 'ALWAYS'|'RISING_EDGE' $triggerMode
 * @property int $conditionLanguageVersion
 */
class ConditionBasedCollectionScheme extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     minimumTriggerIntervalMs?: int,
     *     triggerMode?: 'ALWAYS'|'RISING_EDGE',
     *     conditionLanguageVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

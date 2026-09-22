<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COUNT_OF_RESULTS'|'FIELD_VALUE'|null $thresholdMode
 * @property string|null $thresholdField
 * @property 'GT'|'LT'|'GTE'|'LTE'|null $comparator
 * @property double|null $warningThreshold
 * @property double|null $criticalThreshold
 */
class AlertCondition extends Shape
{
    /**
     * @param array{
     *     thresholdMode?: 'COUNT_OF_RESULTS'|'FIELD_VALUE'|null,
     *     thresholdField?: string|null,
     *     comparator?: 'GT'|'LT'|'GTE'|'LTE'|null,
     *     warningThreshold?: double|null,
     *     criticalThreshold?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

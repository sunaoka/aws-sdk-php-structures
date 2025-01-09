<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL' $failureType
 * @property 'CANCEL' $action
 * @property double $thresholdPercentage
 * @property int $minNumberOfExecutedThings
 */
class AbortCriteria extends Shape
{
    /**
     * @param array{
     *     failureType: 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL',
     *     action: 'CANCEL',
     *     thresholdPercentage: double,
     *     minNumberOfExecutedThings: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

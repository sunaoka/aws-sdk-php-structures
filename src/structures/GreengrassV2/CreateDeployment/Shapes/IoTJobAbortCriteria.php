<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL' $failureType
 * @property 'CANCEL' $action
 * @property double $thresholdPercentage
 * @property int<1, max> $minNumberOfExecutedThings
 */
class IoTJobAbortCriteria extends Shape
{
    /**
     * @param array{
     *     failureType: 'FAILED'|'REJECTED'|'TIMED_OUT'|'ALL',
     *     action: 'CANCEL',
     *     thresholdPercentage: double,
     *     minNumberOfExecutedThings: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

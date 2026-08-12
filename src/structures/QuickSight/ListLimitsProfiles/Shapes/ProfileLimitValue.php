<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListLimitsProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $maxValue
 * @property 'MB'|'GB'|'HOURS'|'DAYS' $unit
 */
class ProfileLimitValue extends Shape
{
    /**
     * @param array{
     *     maxValue: int<0, max>,
     *     unit: 'MB'|'GB'|'HOURS'|'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

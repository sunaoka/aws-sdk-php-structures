<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|'WEEKS'|'MONTHS' $Unit
 * @property int<1, 24> $Value
 * @property int<1, 1000> $MaxInvocationsPerProfile
 * @property bool $Unlimited
 */
class Period extends Shape
{
    /**
     * @param array{
     *     Unit: 'HOURS'|'DAYS'|'WEEKS'|'MONTHS',
     *     Value: int<1, 24>,
     *     MaxInvocationsPerProfile?: int<1, 1000>,
     *     Unlimited?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

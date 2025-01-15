<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|'WEEKS'|'MONTHS' $Unit
 * @property int<1, 24> $Value
 * @property int<1, 1000>|null $MaxInvocationsPerProfile
 * @property bool|null $Unlimited
 */
class Period extends Shape
{
    /**
     * @param array{
     *     Unit: 'HOURS'|'DAYS'|'WEEKS'|'MONTHS',
     *     Value: int<1, 24>,
     *     MaxInvocationsPerProfile?: int<1, 1000>|null,
     *     Unlimited?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

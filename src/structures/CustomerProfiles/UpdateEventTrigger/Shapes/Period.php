<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HOURS'|'DAYS'|'WEEKS'|'MONTHS' $Unit
 * @property int $Value
 * @property int $MaxInvocationsPerProfile
 * @property bool $Unlimited
 */
class Period extends Shape
{
    /**
     * @param array{
     *     Unit: 'HOURS'|'DAYS'|'WEEKS'|'MONTHS',
     *     Value: int,
     *     MaxInvocationsPerProfile?: int,
     *     Unlimited?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeHoursOfOperationOverride\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HoursOfOperationOverrideId
 * @property string|null $HoursOfOperationId
 * @property string|null $HoursOfOperationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property list<HoursOfOperationOverrideConfig>|null $Config
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveTill
 * @property RecurrenceConfig|null $RecurrenceConfig
 * @property 'STANDARD'|'OPEN'|'CLOSED'|null $OverrideType
 */
class HoursOfOperationOverride extends Shape
{
    /**
     * @param array{
     *     HoursOfOperationOverrideId?: string|null,
     *     HoursOfOperationId?: string|null,
     *     HoursOfOperationArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Config?: list<HoursOfOperationOverrideConfig>|null,
     *     EffectiveFrom?: string|null,
     *     EffectiveTill?: string|null,
     *     RecurrenceConfig?: RecurrenceConfig|null,
     *     OverrideType?: 'STANDARD'|'OPEN'|'CLOSED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

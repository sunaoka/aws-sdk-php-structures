<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverrideTimeSlice|null $Start
 * @property OverrideTimeSlice|null $End
 * @property string|null $OverrideName
 * @property 'OPEN'|'CLOSED'|null $OperationalStatus
 */
class OverrideHour extends Shape
{
    /**
     * @param array{
     *     Start?: OverrideTimeSlice|null,
     *     End?: OverrideTimeSlice|null,
     *     OverrideName?: string|null,
     *     OperationalStatus?: 'OPEN'|'CLOSED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

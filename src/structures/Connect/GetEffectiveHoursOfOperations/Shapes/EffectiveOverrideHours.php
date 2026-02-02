<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Date
 * @property list<OverrideHour>|null $OverrideHours
 */
class EffectiveOverrideHours extends Shape
{
    /**
     * @param array{
     *     Date?: string|null,
     *     OverrideHours?: list<OverrideHour>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

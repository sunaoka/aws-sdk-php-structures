<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Date
 * @property list<OperationalHour>|null $OperationalHours
 */
class EffectiveHoursOfOperations extends Shape
{
    /**
     * @param array{
     *     Date?: string|null,
     *     OperationalHours?: list<OperationalHour>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

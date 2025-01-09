<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Date
 * @property list<OperationalHour> $OperationalHours
 */
class EffectiveHoursOfOperations extends Shape
{
    /**
     * @param array{
     *     Date?: string,
     *     OperationalHours?: list<OperationalHour>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

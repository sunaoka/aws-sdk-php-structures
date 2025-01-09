<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY' $DayOfTheWeek
 * @property string $Time
 */
class JobSchedule extends Shape
{
    /**
     * @param array{
     *     DayOfTheWeek: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY',
     *     Time: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

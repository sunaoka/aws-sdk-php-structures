<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $Day
 * @property string $Time
 */
class PreferredDayTimeMaintenanceConfiguration extends Shape
{
    /**
     * @param array{
     *     Day: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     Time: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $description
 * @property 'RECURRING' $type
 * @property 'ANDROID'|'IOS' $platform
 * @property list<RecurringCharge> $recurringCharges
 */
class Offering extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     description?: string,
     *     type?: 'RECURRING',
     *     platform?: 'ANDROID'|'IOS',
     *     recurringCharges?: list<RecurringCharge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $description
 * @property 'RECURRING'|null $type
 * @property 'ANDROID'|'IOS'|null $platform
 * @property list<RecurringCharge>|null $recurringCharges
 */
class Offering extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     description?: string|null,
     *     type?: 'RECURRING'|null,
     *     platform?: 'ANDROID'|'IOS'|null,
     *     recurringCharges?: list<RecurringCharge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

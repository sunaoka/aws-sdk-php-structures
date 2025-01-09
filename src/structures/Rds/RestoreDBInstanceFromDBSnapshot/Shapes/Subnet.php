<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceFromDBSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetIdentifier
 * @property AvailabilityZone $SubnetAvailabilityZone
 * @property Outpost $SubnetOutpost
 * @property string $SubnetStatus
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string,
     *     SubnetAvailabilityZone?: AvailabilityZone,
     *     SubnetOutpost?: Outpost,
     *     SubnetStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

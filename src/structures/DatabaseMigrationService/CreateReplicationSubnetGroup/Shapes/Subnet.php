<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetIdentifier
 * @property AvailabilityZone $SubnetAvailabilityZone
 * @property string $SubnetStatus
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string,
     *     SubnetAvailabilityZone?: AvailabilityZone,
     *     SubnetStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

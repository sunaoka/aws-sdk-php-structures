<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property AvailabilityZone|null $SubnetAvailabilityZone
 * @property Outpost|null $SubnetOutpost
 * @property string|null $SubnetStatus
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: AvailabilityZone|null,
     *     SubnetOutpost?: Outpost|null,
     *     SubnetStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

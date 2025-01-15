<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property AvailabilityZone|null $SubnetAvailabilityZone
 * @property string|null $SubnetStatus
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: AvailabilityZone|null,
     *     SubnetStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

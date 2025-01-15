<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

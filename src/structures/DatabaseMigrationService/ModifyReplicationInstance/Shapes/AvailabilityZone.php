<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

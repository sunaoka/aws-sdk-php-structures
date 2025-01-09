<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateReplicationInstance\Shapes;

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

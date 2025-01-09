<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Destination $destination
 */
class AuditLogDestinationConfiguration extends Shape
{
    /**
     * @param array{destination: Destination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

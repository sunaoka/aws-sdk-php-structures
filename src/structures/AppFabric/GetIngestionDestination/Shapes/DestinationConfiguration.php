<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuditLogDestinationConfiguration|null $auditLog
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{auditLog?: AuditLogDestinationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

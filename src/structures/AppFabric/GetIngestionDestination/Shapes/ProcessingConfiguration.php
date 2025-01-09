<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuditLogProcessingConfiguration $auditLog
 */
class ProcessingConfiguration extends Shape
{
    /**
     * @param array{auditLog?: AuditLogProcessingConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

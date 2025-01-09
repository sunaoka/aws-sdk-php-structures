<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ocsf'|'raw' $schema
 * @property 'json'|'parquet' $format
 */
class AuditLogProcessingConfiguration extends Shape
{
    /**
     * @param array{
     *     schema: 'ocsf'|'raw',
     *     format: 'json'|'parquet'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

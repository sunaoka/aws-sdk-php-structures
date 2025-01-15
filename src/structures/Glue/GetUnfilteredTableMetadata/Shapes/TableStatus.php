<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequestedBy
 * @property string|null $UpdatedBy
 * @property \Aws\Api\DateTimeResult|null $RequestTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property 'UPDATE'|'CREATE'|null $Action
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED'|null $State
 * @property ErrorDetail|null $Error
 * @property StatusDetails|null $Details
 */
class TableStatus extends Shape
{
    /**
     * @param array{
     *     RequestedBy?: string|null,
     *     UpdatedBy?: string|null,
     *     RequestTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     Action?: 'UPDATE'|'CREATE'|null,
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED'|null,
     *     Error?: ErrorDetail|null,
     *     Details?: StatusDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

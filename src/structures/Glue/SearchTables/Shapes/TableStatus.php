<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestedBy
 * @property string $UpdatedBy
 * @property \Aws\Api\DateTimeResult $RequestTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property 'UPDATE'|'CREATE' $Action
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED' $State
 * @property ErrorDetail $Error
 * @property StatusDetails $Details
 */
class TableStatus extends Shape
{
    /**
     * @param array{
     *     RequestedBy?: string,
     *     UpdatedBy?: string,
     *     RequestTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     Action?: 'UPDATE'|'CREATE',
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCESS'|'STOPPED'|'FAILED',
     *     Error?: ErrorDetail,
     *     Details?: StatusDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

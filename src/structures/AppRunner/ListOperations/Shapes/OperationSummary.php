<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'START_DEPLOYMENT'|'CREATE_SERVICE'|'PAUSE_SERVICE'|'RESUME_SERVICE'|'DELETE_SERVICE'|'UPDATE_SERVICE' $Type
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_SUCCEEDED' $Status
 * @property string $TargetArn
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class OperationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'START_DEPLOYMENT'|'CREATE_SERVICE'|'PAUSE_SERVICE'|'RESUME_SERVICE'|'DELETE_SERVICE'|'UPDATE_SERVICE',
     *     Status?: 'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_SUCCEEDED',
     *     TargetArn?: string,
     *     StartedAt?: \Aws\Api\DateTimeResult,
     *     EndedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

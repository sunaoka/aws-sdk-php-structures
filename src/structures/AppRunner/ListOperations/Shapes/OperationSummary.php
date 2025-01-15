<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'START_DEPLOYMENT'|'CREATE_SERVICE'|'PAUSE_SERVICE'|'RESUME_SERVICE'|'DELETE_SERVICE'|'UPDATE_SERVICE'|null $Type
 * @property 'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_SUCCEEDED'|null $Status
 * @property string|null $TargetArn
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class OperationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'START_DEPLOYMENT'|'CREATE_SERVICE'|'PAUSE_SERVICE'|'RESUME_SERVICE'|'DELETE_SERVICE'|'UPDATE_SERVICE'|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_FAILED'|'ROLLBACK_SUCCEEDED'|null,
     *     TargetArn?: string|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     EndedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

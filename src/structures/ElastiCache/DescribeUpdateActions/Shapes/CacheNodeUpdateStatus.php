<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheNodeId
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|null $NodeUpdateStatus
 * @property \Aws\Api\DateTimeResult|null $NodeDeletionDate
 * @property \Aws\Api\DateTimeResult|null $NodeUpdateStartDate
 * @property \Aws\Api\DateTimeResult|null $NodeUpdateEndDate
 * @property 'system'|'customer'|null $NodeUpdateInitiatedBy
 * @property \Aws\Api\DateTimeResult|null $NodeUpdateInitiatedDate
 * @property \Aws\Api\DateTimeResult|null $NodeUpdateStatusModifiedDate
 */
class CacheNodeUpdateStatus extends Shape
{
    /**
     * @param array{
     *     CacheNodeId?: string|null,
     *     NodeUpdateStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|null,
     *     NodeDeletionDate?: \Aws\Api\DateTimeResult|null,
     *     NodeUpdateStartDate?: \Aws\Api\DateTimeResult|null,
     *     NodeUpdateEndDate?: \Aws\Api\DateTimeResult|null,
     *     NodeUpdateInitiatedBy?: 'system'|'customer'|null,
     *     NodeUpdateInitiatedDate?: \Aws\Api\DateTimeResult|null,
     *     NodeUpdateStatusModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

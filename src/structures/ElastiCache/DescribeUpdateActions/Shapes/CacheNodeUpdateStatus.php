<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheNodeId
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete' $NodeUpdateStatus
 * @property \Aws\Api\DateTimeResult $NodeDeletionDate
 * @property \Aws\Api\DateTimeResult $NodeUpdateStartDate
 * @property \Aws\Api\DateTimeResult $NodeUpdateEndDate
 * @property 'system'|'customer' $NodeUpdateInitiatedBy
 * @property \Aws\Api\DateTimeResult $NodeUpdateInitiatedDate
 * @property \Aws\Api\DateTimeResult $NodeUpdateStatusModifiedDate
 */
class CacheNodeUpdateStatus extends Shape
{
    /**
     * @param array{
     *     CacheNodeId?: string,
     *     NodeUpdateStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete',
     *     NodeDeletionDate?: \Aws\Api\DateTimeResult,
     *     NodeUpdateStartDate?: \Aws\Api\DateTimeResult,
     *     NodeUpdateEndDate?: \Aws\Api\DateTimeResult,
     *     NodeUpdateInitiatedBy?: 'system'|'customer',
     *     NodeUpdateInitiatedDate?: \Aws\Api\DateTimeResult,
     *     NodeUpdateStatusModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

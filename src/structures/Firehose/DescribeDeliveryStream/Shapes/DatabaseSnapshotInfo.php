<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Table
 * @property \Aws\Api\DateTimeResult $RequestTimestamp
 * @property 'USER'|'FIREHOSE' $RequestedBy
 * @property 'IN_PROGRESS'|'COMPLETE'|'SUSPENDED' $Status
 * @property FailureDescription $FailureDescription
 */
class DatabaseSnapshotInfo extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Table: string,
     *     RequestTimestamp: \Aws\Api\DateTimeResult,
     *     RequestedBy: 'USER'|'FIREHOSE',
     *     Status: 'IN_PROGRESS'|'COMPLETE'|'SUSPENDED',
     *     FailureDescription?: FailureDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

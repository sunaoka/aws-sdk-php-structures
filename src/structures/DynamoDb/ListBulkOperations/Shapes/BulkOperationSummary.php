<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBulkOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BulkOperationArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELLING'|'CANCELLED'|'FAILED' $BulkOperationStatus
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class BulkOperationSummary extends Shape
{
    /**
     * @param array{
     *     BulkOperationArn: string,
     *     BulkOperationStatus: 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELLING'|'CANCELLED'|'FAILED',
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

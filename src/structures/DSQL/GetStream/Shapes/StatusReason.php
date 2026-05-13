<?php

namespace Sunaoka\Aws\Structures\DSQL\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KINESIS_THROUGHPUT_EXCEEDED'|'KINESIS_STREAM_NOT_FOUND'|'ROLE_ACCESS_DENIED'|'KINESIS_ACCESS_DENIED'|'KINESIS_KMS_ACCESS_DENIED'|'KINESIS_OVERSIZE_RECORD'|'CLUSTER_CMK_INACCESSIBLE'|'INTERNAL_ERROR' $error
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class StatusReason extends Shape
{
    /**
     * @param array{
     *     error: 'KINESIS_THROUGHPUT_EXCEEDED'|'KINESIS_STREAM_NOT_FOUND'|'ROLE_ACCESS_DENIED'|'KINESIS_ACCESS_DENIED'|'KINESIS_KMS_ACCESS_DENIED'|'KINESIS_OVERSIZE_RECORD'|'CLUSTER_CMK_INACCESSIBLE'|'INTERNAL_ERROR',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

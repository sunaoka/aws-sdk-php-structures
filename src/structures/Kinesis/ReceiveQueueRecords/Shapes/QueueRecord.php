<?php

namespace Sunaoka\Aws\Structures\Kinesis\ReceiveQueueRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReceiptHandle
 * @property string $RecordId
 * @property string|null $PartitionKey
 * @property \Psr\Http\Message\StreamInterface $Data
 * @property \Aws\Api\DateTimeResult $ApproximateArrivalTimestamp
 * @property \Aws\Api\DateTimeResult $FirstReceiveTimestamp
 * @property int<0, max> $ReceiveCount
 */
class QueueRecord extends Shape
{
    /**
     * @param array{
     *     ReceiptHandle: string,
     *     RecordId: string,
     *     PartitionKey?: string|null,
     *     Data: \Psr\Http\Message\StreamInterface,
     *     ApproximateArrivalTimestamp: \Aws\Api\DateTimeResult,
     *     FirstReceiveTimestamp: \Aws\Api\DateTimeResult,
     *     ReceiveCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

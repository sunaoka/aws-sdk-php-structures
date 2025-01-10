<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SequenceNumber
 * @property \Aws\Api\DateTimeResult $ApproximateArrivalTimestamp
 * @property \Psr\Http\Message\StreamInterface $Data
 * @property string $PartitionKey
 * @property 'NONE'|'KMS' $EncryptionType
 */
class Record extends Shape
{
    /**
     * @param array{
     *     SequenceNumber: string,
     *     ApproximateArrivalTimestamp?: \Aws\Api\DateTimeResult,
     *     Data: \Psr\Http\Message\StreamInterface,
     *     PartitionKey: string,
     *     EncryptionType?: 'NONE'|'KMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

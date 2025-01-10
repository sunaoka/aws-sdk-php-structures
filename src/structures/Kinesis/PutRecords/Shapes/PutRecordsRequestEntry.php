<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property string $ExplicitHashKey
 * @property string $PartitionKey
 */
class PutRecordsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     ExplicitHashKey?: string,
     *     PartitionKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property string $PartitionKey
 * @property string $ExplicitHashKey
 * @property string $SequenceNumberForOrdering
 * @property string $StreamARN
 */
class PutRecordRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     PartitionKey: string,
     *     ExplicitHashKey?: string,
     *     SequenceNumberForOrdering?: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

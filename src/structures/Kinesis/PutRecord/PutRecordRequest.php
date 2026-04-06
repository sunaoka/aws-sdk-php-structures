<?php

namespace Sunaoka\Aws\Structures\Kinesis\PutRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property string $PartitionKey
 * @property string|null $ExplicitHashKey
 * @property string|null $SequenceNumberForOrdering
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class PutRecordRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     PartitionKey: string,
     *     ExplicitHashKey?: string|null,
     *     SequenceNumberForOrdering?: string|null,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

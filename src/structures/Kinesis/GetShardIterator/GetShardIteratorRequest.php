<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetShardIterator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string $ShardId
 * @property 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $ShardIteratorType
 * @property string|null $StartingSequenceNumber
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $StreamARN
 */
class GetShardIteratorRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     ShardId: string,
     *     ShardIteratorType: 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingSequenceNumber?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

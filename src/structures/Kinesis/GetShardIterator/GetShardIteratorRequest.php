<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetShardIterator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $ShardId
 * @property 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP' $ShardIteratorType
 * @property string $StartingSequenceNumber
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $StreamARN
 */
class GetShardIteratorRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ShardId: string,
     *     ShardIteratorType: 'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'TRIM_HORIZON'|'LATEST'|'AT_TIMESTAMP',
     *     StartingSequenceNumber?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

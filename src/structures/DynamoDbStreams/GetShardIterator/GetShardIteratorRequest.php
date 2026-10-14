<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetShardIterator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamArn
 * @property string $ShardId
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'AT_TIMESTAMP' $ShardIteratorType
 * @property string|null $SequenceNumber
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class GetShardIteratorRequest extends Request
{
    /**
     * @param array{
     *     StreamArn: string,
     *     ShardId: string,
     *     ShardIteratorType: 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER'|'AT_TIMESTAMP',
     *     SequenceNumber?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

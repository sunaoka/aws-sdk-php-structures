<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetShardIterator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamArn
 * @property string $ShardId
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER' $ShardIteratorType
 * @property string $SequenceNumber
 */
class GetShardIteratorRequest extends Request
{
    /**
     * @param array{
     *     StreamArn: string,
     *     ShardId: string,
     *     ShardIteratorType: 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER',
     *     SequenceNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

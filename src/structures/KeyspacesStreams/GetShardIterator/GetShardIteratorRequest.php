<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetShardIterator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $streamArn
 * @property string $shardId
 * @property 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER' $shardIteratorType
 * @property string|null $sequenceNumber
 */
class GetShardIteratorRequest extends Request
{
    /**
     * @param array{
     *     streamArn: string,
     *     shardId: string,
     *     shardIteratorType: 'TRIM_HORIZON'|'LATEST'|'AT_SEQUENCE_NUMBER'|'AFTER_SEQUENCE_NUMBER',
     *     sequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

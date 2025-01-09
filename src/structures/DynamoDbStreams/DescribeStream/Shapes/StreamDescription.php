<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property string $StreamLabel
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $StreamStatus
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY' $StreamViewType
 * @property \Aws\Api\DateTimeResult $CreationRequestDateTime
 * @property string $TableName
 * @property list<KeySchemaElement> $KeySchema
 * @property list<Shard> $Shards
 * @property string $LastEvaluatedShardId
 */
class StreamDescription extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string,
     *     StreamLabel?: string,
     *     StreamStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED',
     *     StreamViewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY',
     *     CreationRequestDateTime?: \Aws\Api\DateTimeResult,
     *     TableName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     Shards?: list<Shard>,
     *     LastEvaluatedShardId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

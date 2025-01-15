<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 * @property string|null $StreamLabel
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null $StreamStatus
 * @property 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'|null $StreamViewType
 * @property \Aws\Api\DateTimeResult|null $CreationRequestDateTime
 * @property string|null $TableName
 * @property list<KeySchemaElement>|null $KeySchema
 * @property list<Shard>|null $Shards
 * @property string|null $LastEvaluatedShardId
 */
class StreamDescription extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string|null,
     *     StreamLabel?: string|null,
     *     StreamStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null,
     *     StreamViewType?: 'NEW_IMAGE'|'OLD_IMAGE'|'NEW_AND_OLD_IMAGES'|'KEYS_ONLY'|null,
     *     CreationRequestDateTime?: \Aws\Api\DateTimeResult|null,
     *     TableName?: string|null,
     *     KeySchema?: list<KeySchemaElement>|null,
     *     Shards?: list<Shard>|null,
     *     LastEvaluatedShardId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

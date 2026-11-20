<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD'|null $Compression
 * @property 'ALL'|'LEADER'|null $Acks
 * @property string|null $PartitionKey
 * @property list<MskHeader>|null $Headers
 * @property string|null $ClientId
 * @property 'PUBLIC'|'PRIVATE' $Connectivity
 */
class MskParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     Compression?: 'NONE'|'GZIP'|'SNAPPY'|'LZ4'|'ZSTD'|null,
     *     Acks?: 'ALL'|'LEADER'|null,
     *     PartitionKey?: string|null,
     *     Headers?: list<MskHeader>|null,
     *     ClientId?: string|null,
     *     Connectivity: 'PUBLIC'|'PRIVATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

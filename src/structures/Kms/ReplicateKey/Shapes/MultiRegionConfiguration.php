<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY'|'REPLICA' $MultiRegionKeyType
 * @property MultiRegionKey $PrimaryKey
 * @property list<MultiRegionKey> $ReplicaKeys
 */
class MultiRegionConfiguration extends Shape
{
    /**
     * @param array{
     *     MultiRegionKeyType?: 'PRIMARY'|'REPLICA',
     *     PrimaryKey?: MultiRegionKey,
     *     ReplicaKeys?: list<MultiRegionKey>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

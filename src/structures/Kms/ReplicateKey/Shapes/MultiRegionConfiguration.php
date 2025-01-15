<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY'|'REPLICA'|null $MultiRegionKeyType
 * @property MultiRegionKey|null $PrimaryKey
 * @property list<MultiRegionKey>|null $ReplicaKeys
 */
class MultiRegionConfiguration extends Shape
{
    /**
     * @param array{
     *     MultiRegionKeyType?: 'PRIMARY'|'REPLICA'|null,
     *     PrimaryKey?: MultiRegionKey|null,
     *     ReplicaKeys?: list<MultiRegionKey>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

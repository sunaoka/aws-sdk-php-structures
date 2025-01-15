<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnDefinition> $allColumns
 * @property list<PartitionKey> $partitionKeys
 * @property list<ClusteringKey>|null $clusteringKeys
 * @property list<StaticColumn>|null $staticColumns
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{
     *     allColumns: list<ColumnDefinition>,
     *     partitionKeys: list<PartitionKey>,
     *     clusteringKeys?: list<ClusteringKey>|null,
     *     staticColumns?: list<StaticColumn>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

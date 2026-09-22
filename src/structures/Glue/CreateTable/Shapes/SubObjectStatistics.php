<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIVE_PARQUET'|'HIVE_ORC'|'HIVE_CSV'|'HIVE_JSON'|'PLAIN_PARQUET'|'ICEBERG'|null $SourceType
 * @property string|null $GlueVersionId
 * @property int|null $PartitionCount
 * @property int|null $FileCount
 * @property int|null $TotalFileBytes
 */
class SubObjectStatistics extends Shape
{
    /**
     * @param array{
     *     SourceType?: 'HIVE_PARQUET'|'HIVE_ORC'|'HIVE_CSV'|'HIVE_JSON'|'PLAIN_PARQUET'|'ICEBERG'|null,
     *     GlueVersionId?: string|null,
     *     PartitionCount?: int|null,
     *     FileCount?: int|null,
     *     TotalFileBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

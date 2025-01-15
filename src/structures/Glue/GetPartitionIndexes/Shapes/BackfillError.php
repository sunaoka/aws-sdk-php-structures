<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitionIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENCRYPTED_PARTITION_ERROR'|'INTERNAL_ERROR'|'INVALID_PARTITION_TYPE_DATA_ERROR'|'MISSING_PARTITION_VALUE_ERROR'|'UNSUPPORTED_PARTITION_CHARACTER_ERROR'|null $Code
 * @property list<PartitionValueList>|null $Partitions
 */
class BackfillError extends Shape
{
    /**
     * @param array{
     *     Code?: 'ENCRYPTED_PARTITION_ERROR'|'INTERNAL_ERROR'|'INVALID_PARTITION_TYPE_DATA_ERROR'|'MISSING_PARTITION_VALUE_ERROR'|'UNSUPPORTED_PARTITION_CHARACTER_ERROR'|null,
     *     Partitions?: list<PartitionValueList>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

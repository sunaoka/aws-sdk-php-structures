<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 * @property \Aws\Api\DateTimeResult|null $LastAccessTime
 * @property StorageDescriptor|null $StorageDescriptor
 * @property array<string, string>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $LastAnalyzedTime
 */
class PartitionInput extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>|null,
     *     LastAccessTime?: \Aws\Api\DateTimeResult|null,
     *     StorageDescriptor?: StorageDescriptor|null,
     *     Parameters?: array<string, string>|null,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

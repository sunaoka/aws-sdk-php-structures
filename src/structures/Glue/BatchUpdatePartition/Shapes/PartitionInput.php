<?php

namespace Sunaoka\Aws\Structures\Glue\BatchUpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 * @property \Aws\Api\DateTimeResult $LastAccessTime
 * @property StorageDescriptor $StorageDescriptor
 * @property array<string, string> $Parameters
 * @property \Aws\Api\DateTimeResult $LastAnalyzedTime
 */
class PartitionInput extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>,
     *     LastAccessTime?: \Aws\Api\DateTimeResult,
     *     StorageDescriptor?: StorageDescriptor,
     *     Parameters?: array<string, string>,
     *     LastAnalyzedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

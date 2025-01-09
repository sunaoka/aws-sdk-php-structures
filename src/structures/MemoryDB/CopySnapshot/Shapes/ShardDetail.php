<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CopySnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ShardConfiguration $Configuration
 * @property string $Size
 * @property \Aws\Api\DateTimeResult $SnapshotCreationTime
 */
class ShardDetail extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Configuration?: ShardConfiguration,
     *     Size?: string,
     *     SnapshotCreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

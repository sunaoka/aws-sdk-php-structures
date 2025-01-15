<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property ShardConfiguration|null $Configuration
 * @property string|null $Size
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreationTime
 */
class ShardDetail extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Configuration?: ShardConfiguration|null,
     *     Size?: string|null,
     *     SnapshotCreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

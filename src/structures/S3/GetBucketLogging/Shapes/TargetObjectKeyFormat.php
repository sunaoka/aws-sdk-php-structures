<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimplePrefix|null $SimplePrefix
 * @property PartitionedPrefix|null $PartitionedPrefix
 */
class TargetObjectKeyFormat extends Shape
{
    /**
     * @param array{
     *     SimplePrefix?: SimplePrefix|null,
     *     PartitionedPrefix?: PartitionedPrefix|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

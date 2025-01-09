<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SimplePrefix $SimplePrefix
 * @property PartitionedPrefix $PartitionedPrefix
 */
class TargetObjectKeyFormat extends Shape
{
    /**
     * @param array{
     *     SimplePrefix?: SimplePrefix,
     *     PartitionedPrefix?: PartitionedPrefix
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

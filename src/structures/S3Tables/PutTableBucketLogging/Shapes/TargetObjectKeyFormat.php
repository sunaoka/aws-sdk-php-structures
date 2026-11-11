<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketLogging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PartitionedPrefix $partitionedPrefix
 */
class TargetObjectKeyFormat extends Shape
{
    /**
     * @param array{partitionedPrefix: PartitionedPrefix} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

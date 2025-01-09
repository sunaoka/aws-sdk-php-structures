<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Minutes
 */
class ReplicationTimeValue extends Shape
{
    /**
     * @param array{Minutes?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

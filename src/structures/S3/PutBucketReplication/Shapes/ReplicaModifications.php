<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 */
class ReplicaModifications extends Shape
{
    /**
     * @param array{Status: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

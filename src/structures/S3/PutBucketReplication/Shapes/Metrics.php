<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 * @property ReplicationTimeValue|null $EventThreshold
 */
class Metrics extends Shape
{
    /**
     * @param array{
     *     Status: 'Enabled'|'Disabled',
     *     EventThreshold?: ReplicationTimeValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

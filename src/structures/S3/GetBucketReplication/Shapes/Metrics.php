<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 * @property ReplicationTimeValue $EventThreshold
 */
class Metrics extends Shape
{
    /**
     * @param array{
     *     Status: 'Enabled'|'Disabled',
     *     EventThreshold?: ReplicationTimeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

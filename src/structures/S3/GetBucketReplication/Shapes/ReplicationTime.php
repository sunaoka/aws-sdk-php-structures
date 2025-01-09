<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Status
 * @property ReplicationTimeValue $Time
 */
class ReplicationTime extends Shape
{
    /**
     * @param array{
     *     Status: 'Enabled'|'Disabled',
     *     Time: ReplicationTimeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

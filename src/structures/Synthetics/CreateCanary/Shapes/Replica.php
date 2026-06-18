<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property ReplicationStatus|null $ReplicationStatus
 * @property 'CREATING'|'READY'|'STARTING'|'RUNNING'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|'DELETING'|null $CanaryState
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property VpcConfigOutput|null $VpcConfig
 */
class Replica extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     ReplicationStatus?: ReplicationStatus|null,
     *     CanaryState?: 'CREATING'|'READY'|'STARTING'|'RUNNING'|'UPDATING'|'STOPPING'|'STOPPED'|'ERROR'|'DELETING'|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     VpcConfig?: VpcConfigOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

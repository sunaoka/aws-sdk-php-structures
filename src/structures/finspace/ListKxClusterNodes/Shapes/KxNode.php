<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeId
 * @property string $availabilityZoneId
 * @property \Aws\Api\DateTimeResult $launchTime
 * @property 'RUNNING'|'PROVISIONING' $status
 */
class KxNode extends Shape
{
    /**
     * @param array{
     *     nodeId?: string,
     *     availabilityZoneId?: string,
     *     launchTime?: \Aws\Api\DateTimeResult,
     *     status?: 'RUNNING'|'PROVISIONING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

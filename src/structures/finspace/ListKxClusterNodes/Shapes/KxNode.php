<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxClusterNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeId
 * @property string|null $availabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $launchTime
 * @property 'RUNNING'|'PROVISIONING'|null $status
 */
class KxNode extends Shape
{
    /**
     * @param array{
     *     nodeId?: string|null,
     *     availabilityZoneId?: string|null,
     *     launchTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'RUNNING'|'PROVISIONING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

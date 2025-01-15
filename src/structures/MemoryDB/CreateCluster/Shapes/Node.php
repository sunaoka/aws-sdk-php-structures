<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $AvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property Endpoint|null $Endpoint
 */
class Node extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     AvailabilityZone?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Endpoint?: Endpoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

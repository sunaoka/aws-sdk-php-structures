<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property string $AvailabilityZone
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property Endpoint $Endpoint
 */
class Node extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     AvailabilityZone?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Endpoint?: Endpoint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

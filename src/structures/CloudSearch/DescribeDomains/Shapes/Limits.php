<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumReplicationCount
 * @property int $MaximumPartitionCount
 */
class Limits extends Shape
{
    /**
     * @param array{
     *     MaximumReplicationCount: int,
     *     MaximumPartitionCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

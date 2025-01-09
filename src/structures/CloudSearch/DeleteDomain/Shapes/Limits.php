<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaximumReplicationCount
 * @property int<1, max> $MaximumPartitionCount
 */
class Limits extends Shape
{
    /**
     * @param array{
     *     MaximumReplicationCount: int<1, max>,
     *     MaximumPartitionCount: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

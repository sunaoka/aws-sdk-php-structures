<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceNetworkData $sourceNetworkData
 */
class EventResourceData extends Shape
{
    /**
     * @param array{sourceNetworkData?: SourceNetworkData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

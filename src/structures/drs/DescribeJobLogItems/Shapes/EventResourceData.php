<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceNetworkData|null $sourceNetworkData
 */
class EventResourceData extends Shape
{
    /**
     * @param array{sourceNetworkData?: SourceNetworkData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

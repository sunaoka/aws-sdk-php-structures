<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListGlobalTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 */
class Replica extends Shape
{
    /**
     * @param array{RegionName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

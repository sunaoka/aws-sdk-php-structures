<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $supportedRegions
 */
class SnowflakeMetadata extends Shape
{
    /**
     * @param array{supportedRegions?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

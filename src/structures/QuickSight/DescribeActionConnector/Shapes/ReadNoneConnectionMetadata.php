<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 */
class ReadNoneConnectionMetadata extends Shape
{
    /**
     * @param array{BaseEndpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

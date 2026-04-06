<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string $Username
 */
class ReadBasicAuthConnectionMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     Username: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

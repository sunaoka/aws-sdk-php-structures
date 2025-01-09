<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationName
 */
class SupportedOperation extends Shape
{
    /**
     * @param array{OperationName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

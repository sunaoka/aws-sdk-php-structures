<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoDetails|null $ClusterInfo
 */
class AwsMskClusterDetails extends Shape
{
    /**
     * @param array{ClusterInfo?: AwsMskClusterClusterInfoDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

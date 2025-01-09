<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoDetails $ClusterInfo
 */
class AwsMskClusterDetails extends Shape
{
    /**
     * @param array{ClusterInfo?: AwsMskClusterClusterInfoDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property string $Region
 * @property string $Status
 * @property string $ARN
 */
class RegionalCluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     Region?: string,
     *     Status?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

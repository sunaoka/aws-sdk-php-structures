<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property string|null $Region
 * @property string|null $Status
 * @property string|null $ARN
 */
class RegionalCluster extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     Region?: string|null,
     *     Status?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $Status
 * @property string|null $FeatureName
 */
class DBClusterRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     Status?: string|null,
     *     FeatureName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

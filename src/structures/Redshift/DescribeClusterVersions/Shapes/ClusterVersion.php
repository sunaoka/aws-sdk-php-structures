<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterVersion
 * @property string|null $ClusterParameterGroupFamily
 * @property string|null $Description
 */
class ClusterVersion extends Shape
{
    /**
     * @param array{
     *     ClusterVersion?: string|null,
     *     ClusterParameterGroupFamily?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

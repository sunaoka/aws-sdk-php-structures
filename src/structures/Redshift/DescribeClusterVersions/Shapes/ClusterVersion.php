<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterVersion
 * @property string $ClusterParameterGroupFamily
 * @property string $Description
 */
class ClusterVersion extends Shape
{
    /**
     * @param array{
     *     ClusterVersion?: string,
     *     ClusterParameterGroupFamily?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

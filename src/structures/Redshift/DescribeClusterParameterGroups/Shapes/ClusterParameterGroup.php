<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterParameterGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterGroupName
 * @property string $ParameterGroupFamily
 * @property string $Description
 * @property list<Tag> $Tags
 */
class ClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string,
     *     ParameterGroupFamily?: string,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

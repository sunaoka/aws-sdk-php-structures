<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterGroupName
 * @property string|null $ParameterGroupFamily
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class ClusterParameterGroup extends Shape
{
    /**
     * @param array{
     *     ParameterGroupName?: string|null,
     *     ParameterGroupFamily?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

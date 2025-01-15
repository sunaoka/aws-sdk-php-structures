<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDefaultClusterParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterGroupFamily
 * @property string|null $Marker
 * @property list<Parameter>|null $Parameters
 */
class DefaultClusterParameters extends Shape
{
    /**
     * @param array{
     *     ParameterGroupFamily?: string|null,
     *     Marker?: string|null,
     *     Parameters?: list<Parameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

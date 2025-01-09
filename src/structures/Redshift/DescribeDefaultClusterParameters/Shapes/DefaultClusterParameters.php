<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeDefaultClusterParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterGroupFamily
 * @property string $Marker
 * @property list<Parameter> $Parameters
 */
class DefaultClusterParameters extends Shape
{
    /**
     * @param array{
     *     ParameterGroupFamily?: string,
     *     Marker?: string,
     *     Parameters?: list<Parameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

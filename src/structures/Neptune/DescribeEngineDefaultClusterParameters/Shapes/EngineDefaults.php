<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEngineDefaultClusterParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBParameterGroupFamily
 * @property string $Marker
 * @property list<Parameter> $Parameters
 */
class EngineDefaults extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupFamily?: string,
     *     Marker?: string,
     *     Parameters?: list<Parameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEngineDefaultClusterParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBParameterGroupFamily
 * @property string|null $Marker
 * @property list<Parameter>|null $Parameters
 */
class EngineDefaults extends Shape
{
    /**
     * @param array{
     *     DBParameterGroupFamily?: string|null,
     *     Marker?: string|null,
     *     Parameters?: list<Parameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

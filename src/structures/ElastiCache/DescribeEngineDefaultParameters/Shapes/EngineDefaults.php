<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheParameterGroupFamily
 * @property string $Marker
 * @property list<Parameter> $Parameters
 * @property list<CacheNodeTypeSpecificParameter> $CacheNodeTypeSpecificParameters
 */
class EngineDefaults extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupFamily?: string,
     *     Marker?: string,
     *     Parameters?: list<Parameter>,
     *     CacheNodeTypeSpecificParameters?: list<CacheNodeTypeSpecificParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

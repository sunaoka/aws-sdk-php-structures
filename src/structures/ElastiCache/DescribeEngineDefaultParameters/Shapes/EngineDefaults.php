<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheParameterGroupFamily
 * @property string|null $Marker
 * @property list<Parameter>|null $Parameters
 * @property list<CacheNodeTypeSpecificParameter>|null $CacheNodeTypeSpecificParameters
 */
class EngineDefaults extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupFamily?: string|null,
     *     Marker?: string|null,
     *     Parameters?: list<Parameter>|null,
     *     CacheNodeTypeSpecificParameters?: list<CacheNodeTypeSpecificParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

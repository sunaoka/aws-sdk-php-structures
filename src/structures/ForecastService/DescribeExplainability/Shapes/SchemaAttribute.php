<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property 'string'|'integer'|'float'|'timestamp'|'geolocation'|null $AttributeType
 */
class SchemaAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeType?: 'string'|'integer'|'float'|'timestamp'|'geolocation'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

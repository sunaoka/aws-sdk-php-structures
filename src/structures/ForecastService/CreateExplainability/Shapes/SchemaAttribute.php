<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'string'|'integer'|'float'|'timestamp'|'geolocation' $AttributeType
 */
class SchemaAttribute extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeType?: 'string'|'integer'|'float'|'timestamp'|'geolocation'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

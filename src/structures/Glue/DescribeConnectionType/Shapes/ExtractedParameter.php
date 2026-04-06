<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $DefaultValue
 * @property 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null $PropertyLocation
 * @property ResponseExtractionMapping|null $Value
 */
class ExtractedParameter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     DefaultValue?: string|null,
     *     PropertyLocation?: 'HEADER'|'BODY'|'QUERY_PARAM'|'PATH'|null,
     *     Value?: ResponseExtractionMapping|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

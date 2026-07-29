<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryParameterName
 * @property bool|null $QuoteStringValues
 * @property string|null $QuoteCharacter
 */
class FilterStringConfiguration extends Shape
{
    /**
     * @param array{
     *     QueryParameterName: string,
     *     QuoteStringValues?: bool|null,
     *     QuoteCharacter?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

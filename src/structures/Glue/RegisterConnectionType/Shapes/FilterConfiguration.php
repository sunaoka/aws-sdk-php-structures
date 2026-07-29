<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUERY_PARAMS'|'FILTER_STRING' $FilterMode
 * @property array<string, string>|null $OperatorMappings
 * @property string|null $DateTimeFormat
 * @property bool|null $StripQuotes
 * @property BetweenConfiguration|null $BetweenConfiguration
 * @property FilterStringConfiguration|null $FilterStringConfiguration
 */
class FilterConfiguration extends Shape
{
    /**
     * @param array{
     *     FilterMode: 'QUERY_PARAMS'|'FILTER_STRING',
     *     OperatorMappings?: array<string, string>|null,
     *     DateTimeFormat?: string|null,
     *     StripQuotes?: bool|null,
     *     BetweenConfiguration?: BetweenConfiguration|null,
     *     FilterStringConfiguration?: FilterStringConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

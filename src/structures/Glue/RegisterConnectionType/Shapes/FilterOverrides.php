<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property array<string, string>|null $OperatorMappings
 * @property BetweenConfiguration|null $BetweenConfiguration
 * @property string|null $DateTimeFormat
 */
class FilterOverrides extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     OperatorMappings?: array<string, string>|null,
     *     BetweenConfiguration?: BetweenConfiguration|null,
     *     DateTimeFormat?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

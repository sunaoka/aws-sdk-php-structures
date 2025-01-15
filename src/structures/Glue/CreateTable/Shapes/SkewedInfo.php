<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SkewedColumnNames
 * @property list<string>|null $SkewedColumnValues
 * @property array<string, string>|null $SkewedColumnValueLocationMaps
 */
class SkewedInfo extends Shape
{
    /**
     * @param array{
     *     SkewedColumnNames?: list<string>|null,
     *     SkewedColumnValues?: list<string>|null,
     *     SkewedColumnValueLocationMaps?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

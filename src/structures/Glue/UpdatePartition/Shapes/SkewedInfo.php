<?php

namespace Sunaoka\Aws\Structures\Glue\UpdatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SkewedColumnNames
 * @property list<string> $SkewedColumnValues
 * @property array<string, string> $SkewedColumnValueLocationMaps
 */
class SkewedInfo extends Shape
{
    /**
     * @param array{
     *     SkewedColumnNames?: list<string>,
     *     SkewedColumnValues?: list<string>,
     *     SkewedColumnValueLocationMaps?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

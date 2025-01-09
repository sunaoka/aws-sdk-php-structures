<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexFieldName
 * @property 'int'|'double'|'literal'|'text'|'date'|'latlon'|'int-array'|'double-array'|'literal-array'|'text-array'|'date-array' $IndexFieldType
 * @property IntOptions $IntOptions
 * @property DoubleOptions $DoubleOptions
 * @property LiteralOptions $LiteralOptions
 * @property TextOptions $TextOptions
 * @property DateOptions $DateOptions
 * @property LatLonOptions $LatLonOptions
 * @property IntArrayOptions $IntArrayOptions
 * @property DoubleArrayOptions $DoubleArrayOptions
 * @property LiteralArrayOptions $LiteralArrayOptions
 * @property TextArrayOptions $TextArrayOptions
 * @property DateArrayOptions $DateArrayOptions
 */
class IndexField extends Shape
{
    /**
     * @param array{
     *     IndexFieldName: string,
     *     IndexFieldType: 'int'|'double'|'literal'|'text'|'date'|'latlon'|'int-array'|'double-array'|'literal-array'|'text-array'|'date-array',
     *     IntOptions?: IntOptions,
     *     DoubleOptions?: DoubleOptions,
     *     LiteralOptions?: LiteralOptions,
     *     TextOptions?: TextOptions,
     *     DateOptions?: DateOptions,
     *     LatLonOptions?: LatLonOptions,
     *     IntArrayOptions?: IntArrayOptions,
     *     DoubleArrayOptions?: DoubleArrayOptions,
     *     LiteralArrayOptions?: LiteralArrayOptions,
     *     TextArrayOptions?: TextArrayOptions,
     *     DateArrayOptions?: DateArrayOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

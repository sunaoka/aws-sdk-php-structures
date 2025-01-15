<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexFieldName
 * @property 'int'|'double'|'literal'|'text'|'date'|'latlon'|'int-array'|'double-array'|'literal-array'|'text-array'|'date-array' $IndexFieldType
 * @property IntOptions|null $IntOptions
 * @property DoubleOptions|null $DoubleOptions
 * @property LiteralOptions|null $LiteralOptions
 * @property TextOptions|null $TextOptions
 * @property DateOptions|null $DateOptions
 * @property LatLonOptions|null $LatLonOptions
 * @property IntArrayOptions|null $IntArrayOptions
 * @property DoubleArrayOptions|null $DoubleArrayOptions
 * @property LiteralArrayOptions|null $LiteralArrayOptions
 * @property TextArrayOptions|null $TextArrayOptions
 * @property DateArrayOptions|null $DateArrayOptions
 */
class IndexField extends Shape
{
    /**
     * @param array{
     *     IndexFieldName: string,
     *     IndexFieldType: 'int'|'double'|'literal'|'text'|'date'|'latlon'|'int-array'|'double-array'|'literal-array'|'text-array'|'date-array',
     *     IntOptions?: IntOptions|null,
     *     DoubleOptions?: DoubleOptions|null,
     *     LiteralOptions?: LiteralOptions|null,
     *     TextOptions?: TextOptions|null,
     *     DateOptions?: DateOptions|null,
     *     LatLonOptions?: LatLonOptions|null,
     *     IntArrayOptions?: IntArrayOptions|null,
     *     DoubleArrayOptions?: DoubleArrayOptions|null,
     *     LiteralArrayOptions?: LiteralArrayOptions|null,
     *     TextArrayOptions?: TextArrayOptions|null,
     *     DateArrayOptions?: DateArrayOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

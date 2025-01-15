<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isNull
 * @property bool|null $bitValue
 * @property int|null $bigIntValue
 * @property int|null $intValue
 * @property double|null $doubleValue
 * @property float|null $realValue
 * @property string|null $stringValue
 * @property \Psr\Http\Message\StreamInterface|null $blobValue
 * @property list<Value>|null $arrayValues
 * @property StructValue|null $structValue
 */
class Value extends Shape
{
    /**
     * @param array{
     *     isNull?: bool|null,
     *     bitValue?: bool|null,
     *     bigIntValue?: int|null,
     *     intValue?: int|null,
     *     doubleValue?: double|null,
     *     realValue?: float|null,
     *     stringValue?: string|null,
     *     blobValue?: \Psr\Http\Message\StreamInterface|null,
     *     arrayValues?: list<Value>|null,
     *     structValue?: StructValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

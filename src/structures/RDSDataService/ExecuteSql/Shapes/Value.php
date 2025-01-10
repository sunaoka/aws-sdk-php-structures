<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isNull
 * @property bool $bitValue
 * @property int $bigIntValue
 * @property int $intValue
 * @property double $doubleValue
 * @property float $realValue
 * @property string $stringValue
 * @property \Psr\Http\Message\StreamInterface $blobValue
 * @property list<Value> $arrayValues
 * @property StructValue $structValue
 */
class Value extends Shape
{
    /**
     * @param array{
     *     isNull?: bool,
     *     bitValue?: bool,
     *     bigIntValue?: int,
     *     intValue?: int,
     *     doubleValue?: double,
     *     realValue?: float,
     *     stringValue?: string,
     *     blobValue?: \Psr\Http\Message\StreamInterface,
     *     arrayValues?: list<Value>,
     *     structValue?: StructValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

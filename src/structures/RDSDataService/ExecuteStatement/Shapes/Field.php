<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isNull
 * @property bool $booleanValue
 * @property int $longValue
 * @property double $doubleValue
 * @property string $stringValue
 * @property string $blobValue
 * @property ArrayValue $arrayValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     isNull?: bool,
     *     booleanValue?: bool,
     *     longValue?: int,
     *     doubleValue?: double,
     *     stringValue?: string,
     *     blobValue?: string,
     *     arrayValue?: ArrayValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

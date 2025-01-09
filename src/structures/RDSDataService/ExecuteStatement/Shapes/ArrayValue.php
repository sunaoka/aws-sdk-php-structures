<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<bool> $booleanValues
 * @property list<int> $longValues
 * @property list<double> $doubleValues
 * @property list<string> $stringValues
 * @property list<ArrayValue> $arrayValues
 */
class ArrayValue extends Shape
{
    /**
     * @param array{
     *     booleanValues?: list<bool>,
     *     longValues?: list<int>,
     *     doubleValues?: list<double>,
     *     stringValues?: list<string>,
     *     arrayValues?: list<ArrayValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

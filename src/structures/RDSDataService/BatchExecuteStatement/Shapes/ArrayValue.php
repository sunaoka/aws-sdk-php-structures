<?php

namespace Sunaoka\Aws\Structures\RDSDataService\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<bool>|null $booleanValues
 * @property list<int>|null $longValues
 * @property list<double>|null $doubleValues
 * @property list<string>|null $stringValues
 * @property list<ArrayValue>|null $arrayValues
 */
class ArrayValue extends Shape
{
    /**
     * @param array{
     *     booleanValues?: list<bool>|null,
     *     longValues?: list<int>|null,
     *     doubleValues?: list<double>|null,
     *     stringValues?: list<string>|null,
     *     arrayValues?: list<ArrayValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

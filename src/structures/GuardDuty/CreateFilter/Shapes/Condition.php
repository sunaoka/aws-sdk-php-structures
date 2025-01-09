<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Eq
 * @property list<string> $Neq
 * @property int $Gt
 * @property int $Gte
 * @property int $Lt
 * @property int $Lte
 * @property list<string> $Equals
 * @property list<string> $NotEquals
 * @property int $GreaterThan
 * @property int $GreaterThanOrEqual
 * @property int $LessThan
 * @property int $LessThanOrEqual
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     Eq?: list<string>,
     *     Neq?: list<string>,
     *     Gt?: int,
     *     Gte?: int,
     *     Lt?: int,
     *     Lte?: int,
     *     Equals?: list<string>,
     *     NotEquals?: list<string>,
     *     GreaterThan?: int,
     *     GreaterThanOrEqual?: int,
     *     LessThan?: int,
     *     LessThanOrEqual?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

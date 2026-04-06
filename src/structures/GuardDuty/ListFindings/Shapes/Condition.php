<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Eq
 * @property list<string>|null $Neq
 * @property int|null $Gt
 * @property int|null $Gte
 * @property int|null $Lt
 * @property int|null $Lte
 * @property list<string>|null $Equals
 * @property list<string>|null $NotEquals
 * @property int|null $GreaterThan
 * @property int|null $GreaterThanOrEqual
 * @property int|null $LessThan
 * @property int|null $LessThanOrEqual
 * @property list<string>|null $Matches
 * @property list<string>|null $NotMatches
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     Eq?: list<string>|null,
     *     Neq?: list<string>|null,
     *     Gt?: int|null,
     *     Gte?: int|null,
     *     Lt?: int|null,
     *     Lte?: int|null,
     *     Equals?: list<string>|null,
     *     NotEquals?: list<string>|null,
     *     GreaterThan?: int|null,
     *     GreaterThanOrEqual?: int|null,
     *     LessThan?: int|null,
     *     LessThanOrEqual?: int|null,
     *     Matches?: list<string>|null,
     *     NotMatches?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

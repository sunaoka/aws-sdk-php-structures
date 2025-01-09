<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'LT'|'GT'|'LTE'|'GTE'|'REGEX'|'ISNULL' $Operation
 * @property bool $Negated
 * @property list<FilterValue> $Values
 */
class FilterExpression extends Shape
{
    /**
     * @param array{
     *     Operation: 'EQ'|'LT'|'GT'|'LTE'|'GTE'|'REGEX'|'ISNULL',
     *     Negated?: bool,
     *     Values: list<FilterValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

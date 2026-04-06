<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO'|null $Operator
 */
class LongCondition extends Shape
{
    /**
     * @param array{
     *     Value: int,
     *     Operator?: 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

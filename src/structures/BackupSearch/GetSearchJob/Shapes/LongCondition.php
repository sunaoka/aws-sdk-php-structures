<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO' $Operator
 */
class LongCondition extends Shape
{
    /**
     * @param array{
     *     Value: int,
     *     Operator?: 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Value
 * @property 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO'|null $Operator
 */
class TimeCondition extends Shape
{
    /**
     * @param array{
     *     Value: \Aws\Api\DateTimeResult,
     *     Operator?: 'EQUALS_TO'|'NOT_EQUALS_TO'|'LESS_THAN_EQUAL_TO'|'GREATER_THAN_EQUAL_TO'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

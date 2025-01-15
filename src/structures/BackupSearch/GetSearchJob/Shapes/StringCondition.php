<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'EQUALS_TO'|'NOT_EQUALS_TO'|'CONTAINS'|'DOES_NOT_CONTAIN'|'BEGINS_WITH'|'ENDS_WITH'|'DOES_NOT_BEGIN_WITH'|'DOES_NOT_END_WITH'|null $Operator
 */
class StringCondition extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Operator?: 'EQUALS_TO'|'NOT_EQUALS_TO'|'CONTAINS'|'DOES_NOT_CONTAIN'|'BEGINS_WITH'|'ENDS_WITH'|'DOES_NOT_BEGIN_WITH'|'DOES_NOT_END_WITH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

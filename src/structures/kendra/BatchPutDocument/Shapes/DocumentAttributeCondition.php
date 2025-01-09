<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConditionDocumentAttributeKey
 * @property 'GreaterThan'|'GreaterThanOrEquals'|'LessThan'|'LessThanOrEquals'|'Equals'|'NotEquals'|'Contains'|'NotContains'|'Exists'|'NotExists'|'BeginsWith' $Operator
 * @property DocumentAttributeValue $ConditionOnValue
 */
class DocumentAttributeCondition extends Shape
{
    /**
     * @param array{
     *     ConditionDocumentAttributeKey: string,
     *     Operator: 'GreaterThan'|'GreaterThanOrEquals'|'LessThan'|'LessThanOrEquals'|'Equals'|'NotEquals'|'Contains'|'NotContains'|'Exists'|'NotExists'|'BeginsWith',
     *     ConditionOnValue?: DocumentAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContextKeyName
 * @property list<string> $ContextKeyValues
 * @property 'string'|'stringList'|'numeric'|'numericList'|'boolean'|'booleanList'|'ip'|'ipList'|'binary'|'binaryList'|'date'|'dateList' $ContextKeyType
 */
class ContextEntry extends Shape
{
    /**
     * @param array{
     *     ContextKeyName?: string,
     *     ContextKeyValues?: list<string>,
     *     ContextKeyType?: 'string'|'stringList'|'numeric'|'numericList'|'boolean'|'booleanList'|'ip'|'ipList'|'binary'|'binaryList'|'date'|'dateList'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

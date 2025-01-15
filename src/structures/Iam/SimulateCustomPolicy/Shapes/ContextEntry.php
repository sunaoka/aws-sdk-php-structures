<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContextKeyName
 * @property list<string>|null $ContextKeyValues
 * @property 'string'|'stringList'|'numeric'|'numericList'|'boolean'|'booleanList'|'ip'|'ipList'|'binary'|'binaryList'|'date'|'dateList'|null $ContextKeyType
 */
class ContextEntry extends Shape
{
    /**
     * @param array{
     *     ContextKeyName?: string|null,
     *     ContextKeyValues?: list<string>|null,
     *     ContextKeyType?: 'string'|'stringList'|'numeric'|'numericList'|'boolean'|'booleanList'|'ip'|'ipList'|'binary'|'binaryList'|'date'|'dateList'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

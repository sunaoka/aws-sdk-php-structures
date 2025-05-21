<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_HEADER'|'SINGLE_COOKIE'|'SINGLE_QUERY_ARGUMENT'|'QUERY_STRING'|'BODY' $FieldType
 * @property list<string>|null $FieldKeys
 */
class FieldToProtect extends Shape
{
    /**
     * @param array{
     *     FieldType: 'SINGLE_HEADER'|'SINGLE_COOKIE'|'SINGLE_QUERY_ARGUMENT'|'QUERY_STRING'|'BODY',
     *     FieldKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

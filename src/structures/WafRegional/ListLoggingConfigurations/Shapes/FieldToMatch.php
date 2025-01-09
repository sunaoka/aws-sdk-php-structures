<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'URI'|'QUERY_STRING'|'HEADER'|'METHOD'|'BODY'|'SINGLE_QUERY_ARG'|'ALL_QUERY_ARGS' $Type
 * @property string $Data
 */
class FieldToMatch extends Shape
{
    /**
     * @param array{
     *     Type: 'URI'|'QUERY_STRING'|'HEADER'|'METHOD'|'BODY'|'SINGLE_QUERY_ARG'|'ALL_QUERY_ARGS',
     *     Data?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

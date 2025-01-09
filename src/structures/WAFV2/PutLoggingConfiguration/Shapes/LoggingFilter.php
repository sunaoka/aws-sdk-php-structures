<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter> $Filters
 * @property 'KEEP'|'DROP' $DefaultBehavior
 */
class LoggingFilter extends Shape
{
    /**
     * @param array{
     *     Filters: list<Filter>,
     *     DefaultBehavior: 'KEEP'|'DROP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

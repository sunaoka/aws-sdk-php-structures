<?php

namespace Sunaoka\Aws\Structures\Pricing\GetProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TERM_MATCH'|'EQUALS'|'CONTAINS'|'ANY_OF'|'NONE_OF' $Type
 * @property string $Field
 * @property string $Value
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Type: 'TERM_MATCH'|'EQUALS'|'CONTAINS'|'ANY_OF'|'NONE_OF',
     *     Field: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

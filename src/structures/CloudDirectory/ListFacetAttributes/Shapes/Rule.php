<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BINARY_LENGTH'|'NUMBER_COMPARISON'|'STRING_FROM_SET'|'STRING_LENGTH' $Type
 * @property array<string, string> $Parameters
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Type?: 'BINARY_LENGTH'|'NUMBER_COMPARISON'|'STRING_FROM_SET'|'STRING_LENGTH',
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

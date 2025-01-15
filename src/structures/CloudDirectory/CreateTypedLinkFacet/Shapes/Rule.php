<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateTypedLinkFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BINARY_LENGTH'|'NUMBER_COMPARISON'|'STRING_FROM_SET'|'STRING_LENGTH'|null $Type
 * @property array<string, string>|null $Parameters
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Type?: 'BINARY_LENGTH'|'NUMBER_COMPARISON'|'STRING_FROM_SET'|'STRING_LENGTH'|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

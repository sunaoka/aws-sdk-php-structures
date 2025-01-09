<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT' $Type
 * @property TypedAttributeValue $DefaultValue
 * @property bool $IsImmutable
 * @property array<string, Rule> $Rules
 */
class FacetAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     Type: 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT',
     *     DefaultValue?: TypedAttributeValue,
     *     IsImmutable?: bool,
     *     Rules?: array<string, Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

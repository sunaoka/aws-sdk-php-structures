<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT' $Type
 * @property TypedAttributeValue|null $DefaultValue
 * @property bool|null $IsImmutable
 * @property array<string, Rule>|null $Rules
 */
class FacetAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     Type: 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT',
     *     DefaultValue?: TypedAttributeValue|null,
     *     IsImmutable?: bool|null,
     *     Rules?: array<string, Rule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

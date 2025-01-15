<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListTypedLinkFacetAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT' $Type
 * @property TypedAttributeValue|null $DefaultValue
 * @property bool|null $IsImmutable
 * @property array<string, Rule>|null $Rules
 * @property 'REQUIRED_ALWAYS'|'NOT_REQUIRED' $RequiredBehavior
 */
class TypedLinkAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT',
     *     DefaultValue?: TypedAttributeValue|null,
     *     IsImmutable?: bool|null,
     *     Rules?: array<string, Rule>|null,
     *     RequiredBehavior: 'REQUIRED_ALWAYS'|'NOT_REQUIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

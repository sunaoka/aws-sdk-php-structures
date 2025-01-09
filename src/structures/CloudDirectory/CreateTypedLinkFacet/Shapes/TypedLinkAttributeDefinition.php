<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateTypedLinkFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT' $Type
 * @property TypedAttributeValue $DefaultValue
 * @property bool $IsImmutable
 * @property array<string, Rule> $Rules
 * @property 'REQUIRED_ALWAYS'|'NOT_REQUIRED' $RequiredBehavior
 */
class TypedLinkAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'STRING'|'BINARY'|'BOOLEAN'|'NUMBER'|'DATETIME'|'VARIANT',
     *     DefaultValue?: TypedAttributeValue,
     *     IsImmutable?: bool,
     *     Rules?: array<string, Rule>,
     *     RequiredBehavior: 'REQUIRED_ALWAYS'|'NOT_REQUIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

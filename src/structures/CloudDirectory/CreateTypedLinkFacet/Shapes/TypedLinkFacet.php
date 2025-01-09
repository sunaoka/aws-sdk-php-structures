<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateTypedLinkFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<TypedLinkAttributeDefinition> $Attributes
 * @property list<string> $IdentityAttributeOrder
 */
class TypedLinkFacet extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Attributes: list<TypedLinkAttributeDefinition>,
     *     IdentityAttributeOrder: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

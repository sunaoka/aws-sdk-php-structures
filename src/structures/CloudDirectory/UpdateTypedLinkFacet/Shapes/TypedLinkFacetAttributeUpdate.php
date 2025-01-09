<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateTypedLinkFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkAttributeDefinition $Attribute
 * @property 'CREATE_OR_UPDATE'|'DELETE' $Action
 */
class TypedLinkFacetAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     Attribute: TypedLinkAttributeDefinition,
     *     Action: 'CREATE_OR_UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

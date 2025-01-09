<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FacetAttribute $Attribute
 * @property 'CREATE_OR_UPDATE'|'DELETE' $Action
 */
class FacetAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     Attribute?: FacetAttribute,
     *     Action?: 'CREATE_OR_UPDATE'|'DELETE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

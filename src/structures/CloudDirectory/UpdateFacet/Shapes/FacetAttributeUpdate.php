<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpdateFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FacetAttribute|null $Attribute
 * @property 'CREATE_OR_UPDATE'|'DELETE'|null $Action
 */
class FacetAttributeUpdate extends Shape
{
    /**
     * @param array{
     *     Attribute?: FacetAttribute|null,
     *     Action?: 'CREATE_OR_UPDATE'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

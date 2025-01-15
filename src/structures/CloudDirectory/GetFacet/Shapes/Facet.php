<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX'|null $ObjectType
 * @property 'STATIC'|'DYNAMIC'|null $FacetStyle
 */
class Facet extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ObjectType?: 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX'|null,
     *     FacetStyle?: 'STATIC'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

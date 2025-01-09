<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetFacet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX' $ObjectType
 * @property 'STATIC'|'DYNAMIC' $FacetStyle
 */
class Facet extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ObjectType?: 'NODE'|'LEAF_NODE'|'POLICY'|'INDEX',
     *     FacetStyle?: 'STATIC'|'DYNAMIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

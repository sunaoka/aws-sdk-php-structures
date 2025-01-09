<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateGeoMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property GeoMatchConstraint $GeoMatchConstraint
 */
class GeoMatchSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     GeoMatchConstraint: GeoMatchConstraint
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

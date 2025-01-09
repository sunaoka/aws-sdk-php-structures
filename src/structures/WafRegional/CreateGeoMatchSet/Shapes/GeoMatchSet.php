<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateGeoMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeoMatchSetId
 * @property string $Name
 * @property list<GeoMatchConstraint> $GeoMatchConstraints
 */
class GeoMatchSet extends Shape
{
    /**
     * @param array{
     *     GeoMatchSetId: string,
     *     Name?: string,
     *     GeoMatchConstraints: list<GeoMatchConstraint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

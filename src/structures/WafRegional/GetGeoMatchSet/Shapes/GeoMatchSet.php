<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetGeoMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeoMatchSetId
 * @property string|null $Name
 * @property list<GeoMatchConstraint> $GeoMatchConstraints
 */
class GeoMatchSet extends Shape
{
    /**
     * @param array{
     *     GeoMatchSetId: string,
     *     Name?: string|null,
     *     GeoMatchConstraints: list<GeoMatchConstraint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

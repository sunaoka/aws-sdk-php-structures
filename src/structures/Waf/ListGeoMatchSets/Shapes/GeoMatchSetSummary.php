<?php

namespace Sunaoka\Aws\Structures\Waf\ListGeoMatchSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeoMatchSetId
 * @property string $Name
 */
class GeoMatchSetSummary extends Shape
{
    /**
     * @param array{
     *     GeoMatchSetId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

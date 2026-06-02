<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Disclaimer'|'Tariff'|null $AttributionType
 * @property RouteWebLink $WebLink
 */
class RouteAttribution extends Shape
{
    /**
     * @param array{
     *     AttributionType?: 'Disclaimer'|'Tariff'|null,
     *     WebLink: RouteWebLink
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

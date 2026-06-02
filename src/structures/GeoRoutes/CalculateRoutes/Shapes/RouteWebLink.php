<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AnchorText
 * @property string $Description
 * @property 'Android'|'Ios'|'Web'|null $DeviceType
 * @property string|null $Url
 */
class RouteWebLink extends Shape
{
    /**
     * @param array{
     *     AnchorText?: string|null,
     *     Description: string,
     *     DeviceType?: 'Android'|'Ios'|'Web'|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

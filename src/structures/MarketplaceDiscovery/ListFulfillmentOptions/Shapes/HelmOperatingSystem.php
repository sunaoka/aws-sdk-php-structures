<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operatingSystemFamilyName
 * @property string $operatingSystemName
 */
class HelmOperatingSystem extends Shape
{
    /**
     * @param array{
     *     operatingSystemFamilyName: string,
     *     operatingSystemName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

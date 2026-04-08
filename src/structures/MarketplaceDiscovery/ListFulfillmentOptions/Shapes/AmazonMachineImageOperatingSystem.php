<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operatingSystemFamilyName
 * @property string $operatingSystemName
 * @property string|null $operatingSystemVersion
 */
class AmazonMachineImageOperatingSystem extends Shape
{
    /**
     * @param array{
     *     operatingSystemFamilyName: string,
     *     operatingSystemName: string,
     *     operatingSystemVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

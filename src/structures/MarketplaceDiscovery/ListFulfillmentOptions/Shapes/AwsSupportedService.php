<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $supportedServiceType
 * @property string $displayName
 * @property string $description
 */
class AwsSupportedService extends Shape
{
    /**
     * @param array{
     *     supportedServiceType: string,
     *     displayName: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

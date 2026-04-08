<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceType
 */
class AmazonMachineImageRecommendation extends Shape
{
    /**
     * @param array{instanceType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

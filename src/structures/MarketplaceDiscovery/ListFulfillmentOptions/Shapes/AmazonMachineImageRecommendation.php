<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceType
 * @property list<AmazonMachineImageSecurityGroup>|null $securityGroups
 */
class AmazonMachineImageRecommendation extends Shape
{
    /**
     * @param array{
     *     instanceType: string,
     *     securityGroups?: list<AmazonMachineImageSecurityGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

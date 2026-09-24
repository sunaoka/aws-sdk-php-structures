<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $protocol
 * @property int $fromPort
 * @property int $toPort
 * @property list<string> $cidrIpAddresses
 */
class AmazonMachineImageSecurityGroup extends Shape
{
    /**
     * @param array{
     *     protocol: string,
     *     fromPort: int,
     *     toPort: int,
     *     cidrIpAddresses: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

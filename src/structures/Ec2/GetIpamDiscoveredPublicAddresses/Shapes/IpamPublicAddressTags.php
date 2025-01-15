<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IpamPublicAddressTag>|null $EipTags
 */
class IpamPublicAddressTags extends Shape
{
    /**
     * @param array{EipTags?: list<IpamPublicAddressTag>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

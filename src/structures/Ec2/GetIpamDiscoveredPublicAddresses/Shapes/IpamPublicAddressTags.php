<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IpamPublicAddressTag> $EipTags
 */
class IpamPublicAddressTags extends Shape
{
    /**
     * @param array{EipTags?: list<IpamPublicAddressTag>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

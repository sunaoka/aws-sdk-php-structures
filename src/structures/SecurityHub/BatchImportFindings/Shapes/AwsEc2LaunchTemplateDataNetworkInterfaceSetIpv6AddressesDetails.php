<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Address
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails extends Shape
{
    /**
     * @param array{Ipv6Address?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

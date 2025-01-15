<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Address
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6AddressesDetails extends Shape
{
    /**
     * @param array{Ipv6Address?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

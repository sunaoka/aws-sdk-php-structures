<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Prefix
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv6PrefixesDetails extends Shape
{
    /**
     * @param array{Ipv6Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

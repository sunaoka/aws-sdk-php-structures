<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv4Prefix
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetIpv4PrefixesDetails extends Shape
{
    /**
     * @param array{Ipv4Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

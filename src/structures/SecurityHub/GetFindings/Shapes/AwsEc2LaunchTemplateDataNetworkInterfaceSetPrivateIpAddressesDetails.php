<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Primary
 * @property string $PrivateIpAddress
 */
class AwsEc2LaunchTemplateDataNetworkInterfaceSetPrivateIpAddressesDetails extends Shape
{
    /**
     * @param array{
     *     Primary?: bool,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

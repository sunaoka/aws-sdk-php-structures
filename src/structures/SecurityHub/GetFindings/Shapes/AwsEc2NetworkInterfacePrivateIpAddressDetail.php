<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateIpAddress
 * @property string $PrivateDnsName
 */
class AwsEc2NetworkInterfacePrivateIpAddressDetail extends Shape
{
    /**
     * @param array{
     *     PrivateIpAddress?: string,
     *     PrivateDnsName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrivateIpAddress
 * @property string|null $PrivateDnsName
 */
class AwsEc2NetworkInterfacePrivateIpAddressDetail extends Shape
{
    /**
     * @param array{
     *     PrivateIpAddress?: string|null,
     *     PrivateDnsName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

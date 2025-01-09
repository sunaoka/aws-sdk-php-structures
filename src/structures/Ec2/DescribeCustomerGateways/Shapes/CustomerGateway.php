<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCustomerGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $DeviceName
 * @property list<Tag> $Tags
 * @property string $BgpAsnExtended
 * @property string $CustomerGatewayId
 * @property string $State
 * @property string $Type
 * @property string $IpAddress
 * @property string $BgpAsn
 */
class CustomerGateway extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     DeviceName?: string,
     *     Tags?: list<Tag>,
     *     BgpAsnExtended?: string,
     *     CustomerGatewayId?: string,
     *     State?: string,
     *     Type?: string,
     *     IpAddress?: string,
     *     BgpAsn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

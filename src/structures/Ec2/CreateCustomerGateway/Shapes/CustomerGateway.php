<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCustomerGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BgpAsn
 * @property string|null $CustomerGatewayId
 * @property string|null $IpAddress
 * @property string|null $CertificateArn
 * @property string|null $State
 * @property string|null $Type
 * @property string|null $DeviceName
 * @property list<Tag>|null $Tags
 */
class CustomerGateway extends Shape
{
    /**
     * @param array{
     *     BgpAsn?: string|null,
     *     CustomerGatewayId?: string|null,
     *     IpAddress?: string|null,
     *     CertificateArn?: string|null,
     *     State?: string|null,
     *     Type?: string|null,
     *     DeviceName?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

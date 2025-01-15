<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCustomerGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $DeviceName
 * @property list<Tag>|null $Tags
 * @property string|null $BgpAsnExtended
 * @property string|null $CustomerGatewayId
 * @property string|null $State
 * @property string|null $Type
 * @property string|null $IpAddress
 * @property string|null $BgpAsn
 */
class CustomerGateway extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     DeviceName?: string|null,
     *     Tags?: list<Tag>|null,
     *     BgpAsnExtended?: string|null,
     *     CustomerGatewayId?: string|null,
     *     State?: string|null,
     *     Type?: string|null,
     *     IpAddress?: string|null,
     *     BgpAsn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

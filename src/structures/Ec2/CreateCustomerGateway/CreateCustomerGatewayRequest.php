<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $BgpAsn
 * @property string|null $PublicIp
 * @property string|null $CertificateArn
 * @property 'ipsec.1' $Type
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $DeviceName
 * @property string|null $IpAddress
 * @property int|null $BgpAsnExtended
 * @property bool|null $DryRun
 */
class CreateCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     BgpAsn?: int|null,
     *     PublicIp?: string|null,
     *     CertificateArn?: string|null,
     *     Type: 'ipsec.1',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DeviceName?: string|null,
     *     IpAddress?: string|null,
     *     BgpAsnExtended?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCustomerGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $BgpAsn
 * @property string $PublicIp
 * @property string $CertificateArn
 * @property 'ipsec.1' $Type
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $DeviceName
 * @property string $IpAddress
 * @property int $BgpAsnExtended
 * @property bool $DryRun
 */
class CreateCustomerGatewayRequest extends Request
{
    /**
     * @param array{
     *     BgpAsn?: int,
     *     PublicIp?: string,
     *     CertificateArn?: string,
     *     Type: 'ipsec.1',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DeviceName?: string,
     *     IpAddress?: string,
     *     BgpAsnExtended?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}

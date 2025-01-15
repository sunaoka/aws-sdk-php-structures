<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2NetworkInterfaceAttachment|null $Attachment
 * @property string|null $NetworkInterfaceId
 * @property list<AwsEc2NetworkInterfaceSecurityGroup>|null $SecurityGroups
 * @property bool|null $SourceDestCheck
 * @property list<AwsEc2NetworkInterfaceIpV6AddressDetail>|null $IpV6Addresses
 * @property list<AwsEc2NetworkInterfacePrivateIpAddressDetail>|null $PrivateIpAddresses
 * @property string|null $PublicDnsName
 * @property string|null $PublicIp
 */
class AwsEc2NetworkInterfaceDetails extends Shape
{
    /**
     * @param array{
     *     Attachment?: AwsEc2NetworkInterfaceAttachment|null,
     *     NetworkInterfaceId?: string|null,
     *     SecurityGroups?: list<AwsEc2NetworkInterfaceSecurityGroup>|null,
     *     SourceDestCheck?: bool|null,
     *     IpV6Addresses?: list<AwsEc2NetworkInterfaceIpV6AddressDetail>|null,
     *     PrivateIpAddresses?: list<AwsEc2NetworkInterfacePrivateIpAddressDetail>|null,
     *     PublicDnsName?: string|null,
     *     PublicIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

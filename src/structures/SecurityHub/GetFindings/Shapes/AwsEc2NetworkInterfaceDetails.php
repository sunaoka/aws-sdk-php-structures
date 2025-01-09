<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEc2NetworkInterfaceAttachment $Attachment
 * @property string $NetworkInterfaceId
 * @property list<AwsEc2NetworkInterfaceSecurityGroup> $SecurityGroups
 * @property bool $SourceDestCheck
 * @property list<AwsEc2NetworkInterfaceIpV6AddressDetail> $IpV6Addresses
 * @property list<AwsEc2NetworkInterfacePrivateIpAddressDetail> $PrivateIpAddresses
 * @property string $PublicDnsName
 * @property string $PublicIp
 */
class AwsEc2NetworkInterfaceDetails extends Shape
{
    /**
     * @param array{
     *     Attachment?: AwsEc2NetworkInterfaceAttachment,
     *     NetworkInterfaceId?: string,
     *     SecurityGroups?: list<AwsEc2NetworkInterfaceSecurityGroup>,
     *     SourceDestCheck?: bool,
     *     IpV6Addresses?: list<AwsEc2NetworkInterfaceIpV6AddressDetail>,
     *     PrivateIpAddresses?: list<AwsEc2NetworkInterfacePrivateIpAddressDetail>,
     *     PublicDnsName?: string,
     *     PublicIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}

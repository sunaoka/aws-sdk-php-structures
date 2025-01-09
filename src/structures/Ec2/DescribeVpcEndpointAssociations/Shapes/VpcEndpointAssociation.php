<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $VpcEndpointId
 * @property string $ServiceNetworkArn
 * @property string $ServiceNetworkName
 * @property string $AssociatedResourceAccessibility
 * @property string $FailureReason
 * @property string $FailureCode
 * @property DnsEntry $DnsEntry
 * @property DnsEntry $PrivateDnsEntry
 * @property string $AssociatedResourceArn
 * @property string $ResourceConfigurationGroupArn
 * @property list<Tag> $Tags
 */
class VpcEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     VpcEndpointId?: string,
     *     ServiceNetworkArn?: string,
     *     ServiceNetworkName?: string,
     *     AssociatedResourceAccessibility?: string,
     *     FailureReason?: string,
     *     FailureCode?: string,
     *     DnsEntry?: DnsEntry,
     *     PrivateDnsEntry?: DnsEntry,
     *     AssociatedResourceArn?: string,
     *     ResourceConfigurationGroupArn?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
